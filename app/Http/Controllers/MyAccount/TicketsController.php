<?php

namespace App\Http\Controllers\MyAccount;

use App\User;
use App\Ticket;

use App\Category;
use Carbon\Carbon;
use App\TicketConversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MyAccount\Ticket as TicketResource;

class TicketsController extends Controller
{
    public function index()
    {
        return view('my_account.tickets.index');
    }

    public function new()
    {
        return view('my_account.tickets.create');
    }

    public function view(Request $request,$id)
    {
        // If employee redirect to admin area
        if( Auth::User()->hasAnyRole('super_admin', 'admin','agent','non-restricted_agent') ){
            return redirect(route('dashboard.ticket.single', ['id' => $id]));
        }

        $ticket = Ticket::where('user_id', Auth::id())->findOrFail($id);
        if($request->isMethod('get')){
            return view('my_account.tickets.view', ['ticket' => $ticket]);
        }
        return $ticket;
    }

    public function categories()
    {
        return collect(Ticket::categories());
    }

    public function details(Request $request, $id)
    {
        $ticket = Ticket::where('user_id', Auth::id())->select(['id','user_id', 'priority','title','status','category_id','assigned_to','created_at','updated_at'])
        ->with('user:id,name,avatar','category:id,name','assignedTo:id,name')
        ->findOrFail($id);

        return new TicketResource($ticket);
    }

    public function save(Request $request)
    {

        $rules = [];
        $rulesMsg = [];

        $rules['title'] =  ['required'];
        $rulesMsg['title.required'] = __("title is required");

        $rules['category'] =  ['required','exists:categories,id'];
        $rulesMsg['category.required'] = __("Category is required");
        $rulesMsg['category.exists'] = __("Category not found");

        $rules['priority'] =  ['required','in:urgent,high,medium,low'];
        $rulesMsg['priority.required'] = __("Priority is required");
        $rulesMsg['priority.in'] = __("Priority must be urgent, high, medium or low");

        $rules['content'] =  ['required'];
        $rulesMsg['content.required'] = __("Ticket content is required");

        $customFields = customFields('ticket', 'create_ticket');

        $customFieldsValidation = [];
        $customFieldsValidationMsg = [];

        foreach($customFields as $field){
            if( empty( $field['rules'] ) ) continue;
            $customFieldsValidation['custom_fields.'.$field['key']] = $field['rules'];
            $rulesMsg = array_merge($rulesMsg, $field['rules_messages']);
        }

        $rules = array_merge($customFieldsValidation, $rules);

        $validatedData = Validator::make($request->all(), $rules, $rulesMsg);

        if ($validatedData->fails()) {
            return ['status' => 'fail', "message" => $validatedData->errors()];
        }
    
        $ticket = new Ticket;
        $assignTo = Ticket::assignTo();
        
        if(!$assignTo){
            return response()->json([
                'status' => 'fail',
                'message' => __('Can not create a ticket, no agent available')
            ]);
        }
     
        $ticket->user_id = Auth::id();
        $ticket->title = $request->input('title');
        $ticket->category_id = $request->input('category');
        $ticket->status = "open";
        $ticket->assigned_to = $assignTo;
        $ticket->priority = $request->input('priority');

        if($ticket->save()) {
            $ticketConversation = new TicketConversation;
            $ticketConversation->user_id = Auth::id();
            $ticketConversation->ticket_id = $ticket->id;
            $ticketConversation->content = $request->input('content');
            if(!$ticketConversation->save()){
                return response()->json(['status' => 'fail', 'message' => __('Failed to submit your ticket, please try again')]); 
            }

            // Save custom fields 
            $customFields = customFields('ticket', 'create_ticket');
            $inputCustomFields = (array)$request->input('custom_fields');
            foreach($customFields as $field){
                if( $inputCustomFields[$field['key']] ){
                    $ticket->updateMeta($field['key'], $inputCustomFields[$field['key']] );
                }
            }

            // Attached the media if exists
            $attachments = (array)json_decode($request->input('attachments'), true);
            $ticketAttachs = [];

            foreach ($attachments as $file) {
                $exists = Storage::disk('ticket')->exists( $file );
                if ( $exists ){

                    if(defaultSetting('disk_ticket_driver') == 's3'){
                        $ticket->addMediaFromUrl(  Storage::disk('ticket')->url( $file ) )->toMediaCollection('attachments', 'ticket');
                    } else {
                        $ticket->addMedia(  Storage::disk('ticket')->path( $file ) )->toMediaCollection('attachments', 'ticket');
                    }
                    
                    // Delete tmp files after adding it to the collection, avoid duplicate files
                    Storage::disk('ticket')->delete( $file );
                }
            }

            if($ticket->user_id == Auth::id() ){
                $notifiable = $ticket->assigned_to;
                $notificationLink = route('dashboard.ticket.single', ['id' => $ticket->id]);
            } else {
                $notifiable = $ticket->user_id;
                $notificationLink = route('my_account.tickets.single', ['id' => $ticket->id]);
            }
            
            try{
                User::find($ticket->assigned_to)
                ->notify(new \App\Notifications\NewTicket($ticket, Auth::user(), $notificationLink));
            }
            catch(\Exception $e){
                report($e);
            }

            return response()->json([
                'status' => 'ok',
                'message' => __('Ticket has been sent'),
                'id' => $ticket->id,
            ]);
        }

        return response()->json(['status' => 'fail','message' => __('Failed to save data')]);
    }

    public function fetch(Request $request)
    {
        $ticket = Ticket::where('tickets.user_id', Auth::id());

        if( in_array($request->input('status'), ['open', 'resolved', 'closed']) ){
            $ticket->where('status', $request->input('status'));
        }

        $ticket->distinct('tickets.id')
            ->select([
                'tickets.id',
                'tickets.user_id',
                'tickets.title',
                'tickets.priority',
                'tickets.status',
                'tickets.category_id',
                'tickets.assigned_to',
                'tickets.created_at',
                'tickets.updated_at'
            ])
            ->with('user:id,name,avatar','category:id,name','assignedTo:id,name')
            ->leftJoin('ticket_conversation','ticket_conversation.ticket_id', '=', 'tickets.id')
            ->orderBy('ticket_conversation.created_at', 'desc');
        
        $ticket = $ticket->paginate(50, ['tickets.id']);
   
        return TicketResource::collection($ticket);
    }
}
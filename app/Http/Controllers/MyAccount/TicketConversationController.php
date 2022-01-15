<?php

namespace App\Http\Controllers\MyAccount;

use App\User;
use App\Ticket;
use App\TicketConversation;
use App\Events\TicketClosed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\TicketConversation as TicketConversationResource;

class TicketConversationController extends Controller
{
    public function fetch($ticket_id)
    {
        $ticketConversation = TicketConversation::orderBy('id', 'desc');
        $ticketConversation = $ticketConversation->where('ticket_id', '=', $ticket_id);
        $ticketConversation = $ticketConversation->paginate(50);

        return TicketConversationResource::collection($ticketConversation);
    }

    public function store(Request $request)
    {
        
        $rules = [];
        $rulesMsg = [];

        $rules['ticket_id'] =  ['required','exists:tickets,id'];
        //$rulesMsg['category.required'] = __("Ticket not specified");
        //$rulesMsg['category.exists'] = __("Ticket not exists or has been deleted");

        $rules['status'] = ['sometimes','in:open,closed,solved'];
        //$rulesMsg['category.in'] = __("Ticket status not defined");

        $validatedData = Validator::make($request->all(), $rules, $rulesMsg);

        if ($validatedData->fails()) {
            return ['status' => 'fail', "message" => $validatedData->errors()];
        }

        $ticket = Ticket::find($request->ticket_id);

        $this->authorize('createReply', $ticket);

        $ticketConversation = new TicketConversation;
        $ticketConversation->user_id = Auth::id();
        $ticketConversation->ticket_id = $request->input('ticket_id');

        if($request->input('status') && $ticket->status != $request->input('status')){
            $ticket->status = $request->input('status');
            if( $ticket->save() && $request->input('status') == 'closed'){
                Event::dispatch(new TicketClosed($ticket));
            }
        }
        
        if(!$request->content){
            return response()->json([
                'status' => 'ok',
                'message' => __('Ticket has been updated.')
            ]);
        }

        $ticketConversation->content = $request->content;

        if ($ticketConversation->save()) {
          
            if($ticket->user_id == Auth::id() ){
                $notifiable = $ticket->assigned_to;
                $notificationLink = route('dashboard.ticket.single', ['id' => $ticket->id]);
            } else {
                $notifiable = $ticket->user_id;
                $notificationLink = route('my_account.tickets.single', ['id' => $ticket->id]);
            }
            
            try {
                User::find($notifiable)->notify(new \App\Notifications\NewTicketReply($ticket, Auth::User(), $notificationLink));
            } catch(\Exception $e){
                report($e);
            }

            return ['status' => 'ok', 'data' => new TicketConversationResource($ticketConversation)];
        }
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Ticket;
use App\TicketConversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Ticket as TicketResource;

class TicketController extends Controller
{
    public function index()
    {
        return view('dashboard.ticket.list');
    }
    
    public function fetch(Request $request)
    {
        $tickets = Ticket::distinct('tickets.id')
            ->select([
                'tickets.id',
                'tickets.user_id',
                'tickets.title',
                'tickets.priority',
                'tickets.status',
                'tickets.category_id',
                'tickets.assigned_to',
                'tickets.created_at',
                'tickets.updated_at',
                "ticket_conversation.created_at as 'ticket_conversation_created_at'"
            ])
            ->with('user:id,name,avatar','category:id,name','assignedTo:id,name')
            ->leftJoin('ticket_conversation','ticket_conversation.ticket_id', '=', 'tickets.id')
            ->orderBy('tickets.id', 'desc')
            ->groupBy('tickets.id');

            if( Auth::user()->can('view_any_ticket') ){
                $tickets->withoutGlobalScope('own_ticket');
            }

            if($request->input('category')){
                $tickets->where('category_id', (int)$request->input('category'));
            }

            $tickets = $tickets->paginate(30, ['tickets.id']);
   
        return TicketResource::collection($tickets);
    }
    
    public function show($id, Request $request)
    {
        $ticket = Ticket::withoutGlobalScope('own_ticket')->findOrFail($id);
        $this->authorize('view', $ticket);
        if($request->isMethod('get')){
            return view('dashboard.ticket.index', ['ticket' => $ticket]);
        }
        return new TicketResource($ticket);
    }

    public function update($id, Request $request)
    {
        $ticket = Ticket::withoutGlobalScope('own_ticket')->findOrFail($id);
        $this->authorize('update', $ticket);
        $ticket->category_id = $request->input('category_id');
        if ($ticket->save()) {return new TicketResource($ticket);}
    }

    public function reAssign($id, Request $request)
    {
        $ticket = Ticket::withoutGlobalScope('own_ticket')->findOrFail($id);
        $this->authorize('reAssign', $ticket);

        $validatedData = Validator::make($request->all(), ['assign_to'], ['required','axists:users']);

        if ($validatedData->fails()) {
            return Response::json([
                'status' => 'fail',
                'messages' => $validatedData->errors()
            ], 422);
        }

        $ticket->assigned_to = $request->input('assign_to');

        if ( $ticket->save() ) {
            
           $notificationLink = route('dashboard.ticket.single', ['id' => $ticket->id]);
           
            try {
                User::find($ticket->assigned_to)
                    ->notify(new \App\Notifications\TicketAssigned($ticket, Auth::User(), $notificationLink));
            } catch(\Exception $e){
                report($e);
            }

            return [
                'message' => __('Ticket has been transferred'),
                'data' => new TicketResource($ticket)
            ];
        }

        return Response::json([
            'status' => 'fail',
            'message' => __('Oops! Something went wrong, please try again')
        ], 422);
    }

    public function destroy($id, Request $request)
    {
        $ticket = Ticket::withoutGlobalScope('own_ticket')->findOrFail($id);
        $this->authorize('delete', $ticket);
        if ($ticket->delete()) {
            return ['status' => 'ok', 'message' => __(':record deleted successfully', ['record' => __('Ticket')])];
        }
        return ['status' => 'fail', 'message' => __('Deletion failed, please try again')];
    }
}
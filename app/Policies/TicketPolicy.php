<?php

namespace App\Policies;

use App\User;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tickets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the ticket.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function view(User $user, Ticket $ticket)
    {
        return ($user->can('view_any_ticket') || ($user->can('view_ticket') && ($user->id == $ticket->user_id || $user->id == $ticket->assigned_to)));
    }

    /**
     * Determine whether the user can create tickets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create_ticket');
    }

    /**
     * Determine whether the user can create ticket reply.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function createReply(User $user, Ticket $ticket)
    {
        if($user->can('create_any_ticket_reply')){
            return true;
        }
        
        if(
            $user->can('create_ticket_reply') &&
            $user->id == $ticket->user_id &&
            $ticket->status !== 'closed' 
        ){
            return true;
        }

        if(
            $user->can('create_ticket_reply') &&
            $user->id == $ticket->assigned_to
        ){
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can update the ticket.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function update(User $user, Ticket $ticket)
    {
        return ($user->can('update_any_ticket') || $user->can('update_ticket'));
    }

    public function reAssign(User $user, Ticket $ticket)
    {
        return $user->can('reassign_ticket');
    }
    
    /**
     * Determine whether the user can delete the ticket.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function delete(User $user, Ticket $ticket)
    {
        return ( $user->can('delete_any_ticket') || ( $user->can('delete_ticket') && ($user->id == $ticket->user_id) ) );
    }

    /**
     * Determine whether the user can restore the ticket.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function restore(User $user, Ticket $ticket)
    {
        return $user->can('restore_ticket', $ticket);
    }

    /**
     * Determine whether the user can permanently delete the ticket.
     *
     * @param  \App\User  $user
     * @param  \App\Ticket  $ticket
     * @return mixed
     */
    public function forceDelete(User $user, Ticket $ticket)
    {
        return $user->can('permanently_delete_ticket', $ticket);
    }
}

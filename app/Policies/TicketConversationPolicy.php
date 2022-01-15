<?php

namespace App\Policies;

use App\TicketConversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketConversationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any ticket conversations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the ticket conversation.
     *
     * @param  \App\User  $user
     * @param  \App\TicketConversation  $ticketConversation
     * @return mixed
     */
    public function view(User $user, TicketConversation $ticketConversation)
    {
        
    }

    /**
     * Determine whether the user can create ticket conversations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // 
    }

    /**
     * Determine whether the user can update the ticket conversation.
     *
     * @param  \App\User  $user
     * @param  \App\TicketConversation  $ticketConversation
     * @return mixed
     */
    public function update(User $user, TicketConversation $ticketConversation)
    {
        return ( $user->can('update_any_ticket_reply') || ( $user->can('update_ticket_reply') && ($user->id == $ticketConversation->user_id) ) );
    }

    /**
     * Determine whether the user can delete the ticket conversation.
     *
     * @param  \App\User  $user
     * @param  \App\TicketConversation  $ticketConversation
     * @return mixed
     */
    public function delete(User $user, TicketConversation $ticketConversation)
    {
        return ( $user->can('delete_any_ticket_reply') || ( $user->can('delete_ticket_reply') && ($user->id == $ticketConversation->user_id) ) );
    }
    
    /**
     * Determine whether the user can restore the ticket conversation.
     *
     * @param  \App\User  $user
     * @param  \App\TicketConversation  $ticketConversation
     * @return mixed
     */
    public function restore(User $user, TicketConversation $ticketConversation)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ticket conversation.
     *
     * @param  \App\User  $user
     * @param  \App\TicketConversation  $ticketConversation
     * @return mixed
     */
    public function forceDelete(User $user, TicketConversation $ticketConversation)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\SavedReply;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SavedReplyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any saved replies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the saved reply.
     *
     * @param  \App\User  $user
     * @param  \App\SavedReply  $savedReply
     * @return mixed
     */
    public function view(User $user, SavedReply $savedReply)
    {
        return $user->can('view_saved_reply') && $user->id == $savedReply->user_id;
    }

    /**
     * Determine whether the user can create saved replies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create_saved_reply');
    }

    /**
     * Determine whether the user can update the saved reply.
     *
     * @param  \App\User  $user
     * @param  \App\SavedReply  $savedReply
     * @return mixed
     */
    public function update(User $user, SavedReply $savedReply)
    {
        return $user->can('update_saved_reply') && $user->id == $savedReply->user_id;
    }

    /**
     * Determine whether the user can delete the saved reply.
     *
     * @param  \App\User  $user
     * @param  \App\SavedReply  $savedReply
     * @return mixed
     */
    public function delete(User $user, SavedReply $savedReply)
    {
        return $user->can('delete_saved_reply') && $user->id == $savedReply->user_id;
    }

    /**
     * Determine whether the user can restore the saved reply.
     *
     * @param  \App\User  $user
     * @param  \App\SavedReply  $savedReply
     * @return mixed
     */
    public function restore(User $user, SavedReply $savedReply)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the saved reply.
     *
     * @param  \App\User  $user
     * @param  \App\SavedReply  $savedReply
     * @return mixed
     */
    public function forceDelete(User $user, SavedReply $savedReply)
    {
        //
    }
}

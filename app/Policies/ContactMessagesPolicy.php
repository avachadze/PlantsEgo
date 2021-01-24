<?php

namespace App\Policies;

use App\Models\ContactMessages;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactMessagesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactMessages  $contactMessages
     * @return mixed
     */
    public function view(User $user, ContactMessages $contactMessages)
    {
        return  $user->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactMessages  $contactMessages
     * @return mixed
     */
    public function delete(User $user, ContactMessages $contactMessages)
    {
        return  $user->role === 'admin';
    }
}

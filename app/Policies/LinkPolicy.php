<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;

class LinkPolicy
{
    /**
     * Determine if the given link can be updated by the user.
     */
    public function update(User $user, Link $link)
    {
        return $user->id === $link->user_id;
    }

    /**
     * Determine if the given link can be deleted by the user.
     */
    public function delete(User $user, Link $link)
    {
        return $user->id === $link->user_id;
    }
}

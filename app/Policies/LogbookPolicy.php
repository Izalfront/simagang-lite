<?php

namespace App\Policies;

use App\Models\Logbook;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogbookPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Logbook $logbook)
    {
        return $user->id === $logbook->user_id;
    }

    public function delete(User $user, Logbook $logbook)
    {
        return $user->id === $logbook->user_id || $user->roles === 'admin';
    }
}

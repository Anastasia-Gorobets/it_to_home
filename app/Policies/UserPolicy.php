<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public  function  update(User $user, User $signedInUser){
        return $user->id == $signedInUser->id;

    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
}

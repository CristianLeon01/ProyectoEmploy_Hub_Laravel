<?php

namespace App\Policies;

use App\Models\Selector;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SelectorPolicy
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

    public function view(User $user, Selector $selector)
    { 
        return $user->id_user_types == 10;
    }
}

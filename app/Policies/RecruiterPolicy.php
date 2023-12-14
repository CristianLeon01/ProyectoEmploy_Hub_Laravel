<?php

namespace App\Policies;

use App\Models\Recruiter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecruiterPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function view(User $user, Recruiter $administrator)
    {
        return $user->id_user_types == 50;
    }
}

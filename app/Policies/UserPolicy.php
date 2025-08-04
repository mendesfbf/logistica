<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Cargo;


class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function ver(User $user)
    {
         $user
               ->cargos()
               ->where('nome', 'Admin')
               ->exists();
    }
}

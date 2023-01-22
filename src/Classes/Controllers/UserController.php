<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function registration($email): bool
    {
        if($this->user->checkEmail($email))
        {
            return true;
        }
        else {
            return false;
        }
    }
}
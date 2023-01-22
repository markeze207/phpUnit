<?php

namespace App\Models;

class User
{
    public function checkEmail($email) : bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function prepareName($name): string
    {
        return ucfirst(trim($name));
    }
}
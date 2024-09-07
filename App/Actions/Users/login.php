<?php

namespace App\Actions\Users;

use App\Modals\User;

class Login
{
    public static function execute(string $username, string $password)
    {
        return User::Login($username, $password);
    }

    public static function execute2(string $username, string $password)
    {
        return User::Login2($username, $password);
    }
}

<?php 

namespace App\Actions\Users;

use App\Modals\User;
class Login
{
    public static function execute(string $username, string $password)
    {
        return User::Login($username, $password);
    }
}
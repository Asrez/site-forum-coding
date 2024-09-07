<?php

namespace App\Actions\Users;

use App\Modals\User;
class GetAllUser
{
    public static function execute()
    {
        return User::GetAll();
    }
}
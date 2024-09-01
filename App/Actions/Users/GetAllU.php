<?php

namespace App\Actions\Users;

use App\Modals\User;
class GetAllU
{
    public static function execute()
    {
        return User::GetAll();
    }
}
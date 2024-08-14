<?php

namespace App\Actions\Users;

use App\Modals\User;

class CountU
{
    public static function execute()
    {
        return User::Count();
    }
}
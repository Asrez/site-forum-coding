<?php

namespace App\Actions\Users;

use App\Modals\User;

class CountU
{
    public static function execute()
    {
        return User::Count();
    }

    public static function execute2()
    {
        return User::Count2();
    }
}
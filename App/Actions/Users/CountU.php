<?php

namespace App\Actions\Posts;

use App\Modals\User;

class CountU
{
    public static function execute()
    {
        return User::Count();
    }
}
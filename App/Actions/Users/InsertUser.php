<?php

namespace App\Actions\Users;

use App\Modals\User;

class InsertUser
{
    public static function execute(array $data)
    {
        return User::Insert($data);
    }

    public static function execute2(array $data)
    {
        return User::Insert2($data);
    }
}

<?php

namespace App\Actions\Users;

use App\Modals\User;

class Deleteimg
{
    public static function execute(int $id)
    {
        return User::Delimg($id);
    }
}

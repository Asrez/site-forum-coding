<?php

namespace App\Actions\Users;

use App\Modals\User;
class DeleteU
{
    public static function execute(int $id)
    {
        return User::Delete($id);
    }
}
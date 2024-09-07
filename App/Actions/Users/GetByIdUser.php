<?php

namespace App\Actions\Users;

use App\Modals\User;
class GetByIdUser
{
    public static function execute(int $id)
    {
        return User::GetById($id);
    }
}
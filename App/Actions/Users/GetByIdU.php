<?php 

namespace App\Actions\Users;

use App\Modals\User;
class GetByIdU
{
    public static function execute(int $id)
    {
        User::GetById($id);
    }
}
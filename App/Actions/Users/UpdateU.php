<?php 

namespace App\Actions\Users;

use App\Modals\User;
class UpdateU
{
    public static function execute(int $id, array $data)
    {
        User::Update($id, $data);
    }
}
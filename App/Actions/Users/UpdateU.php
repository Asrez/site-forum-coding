<?php 

namespace App\Actions\Users;

use App\Modals\User;
class UpdateU
{
    public static function execute(array $data)
    {
        return User::Update($data);
    }
}
<?php 

namespace App\Actions\Users;

use App\Modals\User;
class InsertU
{
    public static function execute(array $data)
    {
        User::Insert($data);
    }
}
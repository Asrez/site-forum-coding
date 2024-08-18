<?php

namespace App\Actions\Search;

use App\Modals\User;
class Usersearch
{
    public static function execute(string $title)
    {
       return User::search($title);
    }
}
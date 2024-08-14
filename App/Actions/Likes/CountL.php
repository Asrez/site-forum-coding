<?php 

namespace App\Actions\Likes;

use App\Modals\Like;
class CountL
{
    public static function execute()
    {
        return like::Count();
    }
}
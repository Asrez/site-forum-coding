<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class GetAllP
{
    public static function execute()
    {
        Post::GetAll();
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class GetAllPost
{
    public static function execute()
    {
        return Post::GetAll();
    }

    public static function execute2()
    {
        return Post::GetAllState();
    }
}
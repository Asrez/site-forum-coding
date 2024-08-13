<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class CountP
{
    public static function execute()
    {
        return Post::Count();
    }
}
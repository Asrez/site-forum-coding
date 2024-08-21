<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class Chart
{
    public static function execute()
    {
        return Post::Chart();
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Post;

class CountPost
{
    public static function execute()
    {
        return Post::Count();
    }
}

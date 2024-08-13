<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class Innerjoin
{
    public static function execute()
    {
        return Post::Innerjoin();
    }
}
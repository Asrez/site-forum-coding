<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class InsertP
{
    public static function execute(array $data)
    {
        return Post::Insert($data);
    }
}
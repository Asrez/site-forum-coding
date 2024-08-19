<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class InsertP
{
    public static function execute(array $data)
    {
        return Post::Insert($data);
    }
    public static function execute2(array $data)
    {
        return Post::Insert2($data);
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class UpdatePost
{
    public static function execute(array $data)
    {
        return Post::Update($data);
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class UpdateP
{
    public static function execute(array $data)
    {
        return Post::Update($data);
    }
}
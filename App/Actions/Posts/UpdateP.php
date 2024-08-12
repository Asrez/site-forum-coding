<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class UpdateP
{
    public static function execute(int $id, array $data)
    {
        Post::Update($id, $data);
    }
}
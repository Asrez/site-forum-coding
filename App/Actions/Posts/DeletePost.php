<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class DeletePost
{
    public static function execute(int $id)
    {
        return Post::Delete($id);
    }
}
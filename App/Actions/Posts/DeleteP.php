<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class DeleteP
{
    public static function execute(int $id)
    {
        Post::Delete($id);
    }
}
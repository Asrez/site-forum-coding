<?php

namespace App\Actions\Posts;

use App\Modals\Post;

class GetByIdPost
{
    public static function execute(int $id)
    {
        return Post::GetById($id);
    }
}

<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class GetByAdminId
{
    public static function execute(int $id)
    {
        return Post::GetByAdminId($id);
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class GetByIdP
{
    public static function execute(int $id)
    {
        Post::GetById($id);
    }
}
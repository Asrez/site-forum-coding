<?php

namespace App\Actions\Posts;

use App\Modals\Post;
class ConfirmPost
{
    public static function execute($id)
    {
        return Post::Confirm($id);
    }
}
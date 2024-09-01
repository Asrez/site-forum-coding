<?php

namespace App\Actions\Comments;

use App\Modals\Comment;
class CountC
{
    public static function execute(int $id)
    {
        return Comment::Count($id);
    }
}
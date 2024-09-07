<?php

namespace App\Actions\Comments;

use App\Modals\Comment;
class DeleteComment
{
    public static function execute(int $id)
    {
        return Comment::Delete($id);
    }
}
<?php

namespace App\Actions\Comments;

use App\Modals\Comment;
class AllCommentsByQusetionId
{
    public static function execute(int $id)
    {
        return Comment::GetAllByIdQ($id);
    }
}
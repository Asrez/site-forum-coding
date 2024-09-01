<?php

namespace App\Actions\Comments;

use App\Modals\Comment;
class AllCommentsByQId
{
    public static function execute(int $id)
    {
        return Comment::GetAllByIdQ($id);
    }
}
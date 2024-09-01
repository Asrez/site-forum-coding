<?php

namespace App\Actions\Comments;

use App\Modals\Comment;
class DeleteC
{
    public static function execute(int $id)
    {
        return Comment::Delete($id);
    }
}
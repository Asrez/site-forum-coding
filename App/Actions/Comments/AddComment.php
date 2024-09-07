<?php

namespace App\Actions\Comments;

use App\Modals\Comment;

class AddComment
{
    public static function execute(array $data)
    {
        return Comment::Insert($data);
    }
}

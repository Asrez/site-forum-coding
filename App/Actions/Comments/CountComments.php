<?php

namespace App\Actions\Comments;

use App\Modals\Comment;

class CountComments
{
    public static function execute(int $id)
    {
        return Comment::Count($id);
    }
}

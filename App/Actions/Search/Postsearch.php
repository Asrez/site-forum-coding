<?php

namespace App\Actions\Search;

use App\Modals\Post;
class Postsearch
{
    public static function execute(string $title)
    {
       return Post::search($title);
    }
}
<?php

namespace App\Actions\Posts;

use App\Modals\Search;
class SearchAll
{
    public static function execute(string $title)
    {
       return Search::search($title);
    }
}
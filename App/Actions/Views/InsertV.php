<?php 

namespace App\Actions\Views;

use App\Modals\View;

class InsertV
{
    public static function execute(int $post_id, string $ip)
    {
        return View::Insert($post_id, $ip);
    }
}
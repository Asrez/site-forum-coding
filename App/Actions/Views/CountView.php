<?php

namespace App\Actions\Views;

use App\Modals\View;

class CountView
{
    public static function execute()
    {
        return View::Count();
    }
}

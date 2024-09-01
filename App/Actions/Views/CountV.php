<?php

namespace App\Actions\Views;

use App\Modals\View;

class CountV
{
    public static function execute()
    {
        return View::Count();
    }
}
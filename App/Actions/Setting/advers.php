<?php

namespace App\Actions\Setting;

use App\Modals\Setting;
class Advers
{
    public static function execute()
    {
        return Setting::advers();
    }
}
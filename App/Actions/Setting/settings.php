<?php

namespace App\Actions\Setting;

use App\Modals\Setting;

class Settings
{
    public static function execute()
    {
        return Setting::settings();
    }
}

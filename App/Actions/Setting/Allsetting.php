<?php

namespace App\Actions\Setting;

use App\Modals\Setting;
class Allsetting
{
    public static function execute(string $key)
    {
        return Setting::Setting($key);
    }
}
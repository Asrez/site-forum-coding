<?php

namespace App\Actions\Setting;

use App\Modals\Setting;
class UpdateSetting
{
    public static function execute(array $data)
    {
        return Setting::Update($data);
    }
}
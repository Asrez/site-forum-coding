<?php

namespace App\Actions\Setting;

use App\Modals\Setting;
class UpdateS
{
    public static function execute(array $data)
    {
        return Setting::Update($data);
    }
}
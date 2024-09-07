<?php

namespace App\Actions\Setting;

use App\Modals\Setting;

class GetByIdSetting
{
    public static function execute(int $id)
    {
        return Setting::GetById($id);
    }
}

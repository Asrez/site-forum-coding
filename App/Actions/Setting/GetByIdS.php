<?php

namespace App\Actions\Setting;

use App\Modals\Setting;
class GetByIdS
{
    public static function execute(int $id)
    {
        return Setting::GetById($id);
    }
}
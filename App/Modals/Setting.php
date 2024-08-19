<?php

namespace App\Modals;

use App\Database\Database;

use PDO;
class Setting
{
    public static function Setting(string $key)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `setting` WHERE `key_setting` = :key";
        $stms = $db->prepare($stms);
        $stms->bindParam("key", $key);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function advers()
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `setting` WHERE `state` = 'adver';";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
}
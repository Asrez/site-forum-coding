<?php

namespace App\Modals;

use App\Database\Database;

use PDO;
class Setting
{
    public static function Setting(string $key): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `settings` WHERE `key_setting` = :key";

        $stms = $db->prepare($sql);
        $stms->bindParam("key", $key);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }

    public static function GetById(int $id): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `settings` WHERE `id` = :id";

        $stms = $db->prepare($sql);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }

    public static function advers(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `settings` WHERE `state` = 'adver';";

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function settings(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `settings` WHERE `state` = 'setting';";

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Update(array $data): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "UPDATE `settings` SET `value_setting`= :value,`link`= :link,`title`= :title,`content`= :content WHERE `id` = :id ;";

        $stms = $db->prepare($sql);
        $stms->bindParam("value", $data['value']);
        $stms->bindParam("link", $data['link']);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("id", $data['id']);
        $stms->execute();

    }
}
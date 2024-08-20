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
    public static function GetById(int $id)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `setting` WHERE `id` = :id";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
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
    public static function settings()
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `setting` WHERE `state` = 'setting';";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Update(array $data)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "UPDATE `setting` SET `value_setting`= :value,`link`= :link,`title`= :title,`content`= :content WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("value", $data['value']);
        $stms->bindParam("link", $data['link']);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("id", $data['id']);
        $stms->execute();

        ?>
        <script type="text/javascript">
            window.alert("updated");
            location.replace("/site_setting");
        </script>
        <?php
    }
}
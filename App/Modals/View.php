<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class View
{
    public static function Insert(int $post_id, string $ip): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `views` WHERE `ip` = :ip AND `question_id` = :id;";

        $isset_query = $db->prepare($sql);
        $isset_query->bindParam("ip", $ip);
        $isset_query->bindParam("id", $post_id);
        $isset_query->execute();
        $isset_query = $isset_query->fetch(PDO::FETCH_ASSOC);

        if ($isset_query === false) {

            $db = Database::getInstance()->getConnection();

            $sql = "INSERT INTO `views`(`id`, `ip`, `question_id`) VALUES (NULL , :ip , :question_id ) ;";

            $stms = $db->prepare($sql);
            $stms->bindParam("ip", $ip);
            $stms->bindParam("question_id", $post_id);
            $stms->execute();

            $sql2 = "UPDATE `questions` SET `viewcount`=`viewcount` + 1 WHERE `id` = :id;";

            $stms = $db->prepare($sql2);
            $stms->bindparam("id", $post_id);
            $stms->execute();
        }

    }

    public static function Count(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT COUNT(*) as count FROM `views`; ";

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
}
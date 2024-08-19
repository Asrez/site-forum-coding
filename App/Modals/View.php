<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class View
{
    public static function Insert(int $post_id , string $ip)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "INSERT INTO `view`(`id`, `ip`, `question_id`) VALUES (NULL , :ip , :question_id ) ;";

        $stms = $db->prepare($stms);
        $stms->bindParam("ip", $ip);
        $stms->bindParam("question_id", $post_id);

        $stms->execute();
    }
    public static function Count() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT COUNT(*) as count FROM `view`; ";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
}
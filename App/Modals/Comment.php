<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class Comment
{
    public static function Insert(array $data)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "INSERT INTO `answers`(`id`, `answer`, `question_id`, `user_id`) VALUES (NULL, :answer, :question_id, :id);";

        $stms = $db->prepare($stms);
        $stms->bindParam("answer", $data['answer']);
        $stms->bindParam("id", $data['id']);
        $stms->bindParam("question_id", $data['question_id']);

        $stms->execute();
    }
    public static function Delete(int $id)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "DELETE FROM `answers` WHERE `id` = :id ;";

        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        $stms->execute();
    }
    public static function Count(int $id) : array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT COUNT(*) as count FROM `answers` WHERE `user_id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function GetAllByIdQ(int $id) :array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `answers` WHERE `question_id` = :id ;";

        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        $stms->execute();
        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class Comment
{
    public static function Insert(array $data): void
    {
        $date = date('Y-m-d');
        $db = Database::getInstance()->getConnection();

        $sql = 'INSERT INTO `answers`(`id`, `title`, `answer`, `question_id`, `user_id`,`date`) VALUES (NULL, :title, :answer, :question_id, :user_id, :date);';

        $stms = $db->prepare($sql);
        $stms->bindParam('title', $data['title']);
        $stms->bindParam('answer', $data['answer']);
        $stms->bindParam('question_id', $data['question_id']);
        $stms->bindParam('user_id', $data['user_id']);
        $stms->bindParam('date', $date);
        $stms->execute();

    }

    public static function Delete(int $id): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'DELETE FROM `answers` WHERE `id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

    }

    public static function Count(int $id): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT COUNT(*) as count FROM `answers` WHERE `user_id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }

    public static function GetAllByIdQ(int $id): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `answers` WHERE `question_id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
}

<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class Comment
{
    public static function Insert(array $data)
    {
        $date = date("Y-m-d");
        $db = Database::getInstance()->getConnection();

        $stms = "INSERT INTO `answers`(`id`, `answer`, `question_id`, `user_id`,`date`) VALUES (NULL, :answer, :question_id, :user_id, :date);";

        $stms = $db->prepare($stms);
        $stms->bindParam("answer", $data['answer']);
        $stms->bindParam("question_id", $data['question_id']);
        $stms->bindParam("user_id", $data['user_id']);
        $stms->bindParam("date", $date);

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("your reply added");
            location.replace("/show_post/<?= $data['question_id'] ?>")
        </script>
        <?php
    }
    public static function Delete(int $id)
    {
        $db = Database::getInstance()->getConnection();

        $stms = "DELETE FROM `answers` WHERE `id` = :id ;";

        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("your reply deleted");
        </script>
        <?php
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
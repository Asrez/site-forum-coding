<?php

namespace App\Modals;

use App\Database\Database;

use PDO;

class Search
{
    public static function search(string $title): array
    {
        $db = Database::getInstance()->getConnection();

        $users_sql = "SELECT * FROM `users` WHERE `users`.`name` LIKE :title ;";

        $posts_sql = "SELECT * FROM `questions` WHERE `questions`.`title` LIKE :title ;";

        $title = '%' . $title . '%';
        $users = $db->prepare($users_sql);
        $posts = $db->prepare($posts_sql);
        $users->bindParam("title", $title);
        $posts->bindParam("title", $title);
        $users->execute();
        $posts->execute();
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        $posts = $posts->fetchAll(PDO::FETCH_ASSOC);

        $all = ["posts" => $posts, "users" => $users];

        return $all;
    }

}
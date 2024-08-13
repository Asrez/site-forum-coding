<?php

namespace App\Modals;

use App\Database\Database;

use PDO;

class Search
{
    public static function search(string $title)
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT * FROM `users` , `posts` WHERE `users`.`name` LIKE(%".$title."%) OR `posts`.`title` LIKE(%".$title."%) ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
}
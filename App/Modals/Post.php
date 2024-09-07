<?php

namespace App\Modals;

use App\Database\Database;
use PDO;

class Post
{
    public static function GetById(int $id)
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions` WHERE `id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

        if ($row = $stms->fetch(PDO::FETCH_ASSOC)) {
            return $row;
        } else {
            return false;
        }

    }

    public static function GetByAdminId(int $id): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions` WHERE `admin_id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function GetAll(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions`;';

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function GetAllState(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions` WHERE `state` = 1;';

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Innerjoin(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT `users`.`id` ,
         `users`.`image` as userimage ,
         `users`.`username` ,
         `questions`.`title` ,
         `questions`.`image` ,
         `questions`.`id` ,
         `questions`.`viewcount` ,
         `questions`.`content` 
        FROM `questions`
        INNER JOIN `users` ON `questions`.`admin_id` = `users`.`id` ;';

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Innerjoin2(int $id): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT `users`.`id` ,
         `users`.`image`,
         `users`.`username` ,
         `answers`.`answer` ,
         `answers`.`id` ,
         `answers`.`user_id` ,
         `answers`.`date` 
        FROM `answers`
        INNER JOIN `users` ON `answers`.`user_id` = `users`.`id` AND `answers`.`question_id` = :id;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Delete(int $id): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'DELETE FROM `questions` WHERE id = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

    }

    public static function Update(array $data): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'UPDATE `questions` SET `title` = :title, `content` = :content, `image`= :image WHERE `id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('title', $data['title']);
        $stms->bindParam('content', $data['content']);
        $stms->bindParam('image', $data['image']);
        $stms->bindParam('id', $data['id']);
        $stms->execute();

    }

    public static function Insert(array $data): void
    {

        $date = date('Y-m-d');

        $db = Database::getInstance()->getConnection();

        $sql = 'INSERT INTO `questions`(`id`, `title`, `date`, `content`, `image`, `admin_id`, `state`, `viewcount`) VALUES (NULL, :title, :date, :content, :image, :admin_id, 1, 0);';

        $stms = $db->prepare($sql);
        $stms->bindParam('title', $data['title']);
        $stms->bindParam('date', $date);
        $stms->bindParam('content', $data['content']);
        $stms->bindParam('image', $data['image']);
        $stms->bindParam('admin_id', $data['admin_id']);
        $stms->execute();

    }

    public static function Insert2(array $data): void
    {

        $date = date('Y-m-d');

        $db = Database::getInstance()->getConnection();

        $sql = 'INSERT INTO `questions`(`id`, `title`, `date`, `content`, `image`, `admin_id`, `state`, `viewcount`) VALUES (NULL, :title, :date, :content, :image, :admin_id, 0, 0);';

        $stms = $db->prepare($sql);
        $stms->bindParam('title', $data['title']);
        $stms->bindParam('date', $date);
        $stms->bindParam('content', $data['content']);
        $stms->bindParam('image', $data['image']);
        $stms->bindParam('admin_id', $data['admin_id']);
        $stms->execute();

    }

    public static function Count(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT COUNT(*) as count FROM `questions` ;';

        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }

    public static function update_viewcount(int $id): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'UPDATE `questions` SET `viewcount`=`viewcount` + 1 WHERE `id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();
    }

    public static function Confirm(int $id): void
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'UPDATE `questions` SET `state` = 1 WHERE `id` = :id ;';

        $stms = $db->prepare($sql);
        $stms->bindParam('id', $id);
        $stms->execute();

    }

    public static function search(string $title): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions` WHERE `questions`.`title` LIKE :title ;';

        $title = '%'.$title.'%';
        $posts = $db->prepare($sql);
        $posts->bindParam('title', $title);
        $posts->execute();

        return $posts->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function search2(string $title): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM `questions` WHERE `questions`.`title` LIKE :title  AND `state` = 1;';

        $title = '%'.$title.'%';
        $posts = $db->prepare($sql);
        $posts->bindParam('title', $title);
        $posts->execute();

        return $posts->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Chart(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT `viewcount` , `title` FROM `questions` ORDER BY `viewcount` DESC LIMIT 12;';

        $posts = $db->prepare($sql);
        $posts->execute();

        return $posts->fetchAll(PDO::FETCH_ASSOC);
    }
}

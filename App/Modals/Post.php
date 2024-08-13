<?php

namespace App\Modals;

use App\Database\Database;
use PDO;
class Post
{
    public function __construct(int $id, string $title, string $content, string $image="nullimage.php", int $admin_id = 1)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->admin_id = $admin_id;
    }
    public static function GetById(int $id) : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT * FROM `posts` WHERE id = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);

    }
    public static function GetAll() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT * FROM `posts` ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Innerjoin() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT `users`.`id` ,
         `users`.`image` as userimage ,
         `users`.`username` ,
         `posts`.`title` ,
         `posts`.`image` ,
         `posts`.`id` ,
         `posts`.`viewcount` ,
         `posts`.`likes` 
        FROM `posts`
        INNER JOIN `users` ON `posts`.`admin_id` = `users`.`id` ;";

        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Delete(int $id) : string
    {
        $db = Database::getInstance()->getConnection();

        $stms="DELETE FROM `posts` WHERE id = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        if($stms->execute()) return "delete post succesed";
        else return "delete post failed";
    }
    public static function Update(int $id, array $data) : string
    {
        $db = Database::getInstance()->getConnection();

        $stms="UPDATE `posts` SET `title`= :title ,`content`= :content ,`image`= :image  WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("image", $data['image']);


        if($stms->execute()) return "insert post succesed";
        else return "insert post failed";
    }
    public static function Insert(array $data) : string
    {
        $date = date("Y-m-d");

        $db = Database::getInstance()->getConnection();

        $stms="INSERT INTO `posts`(`id`, `title`, `date`, `content`, `image`, `admin_id`) VALUES (NULL , :title , :date , :content ', :image , :admin_id ) ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("date", $date);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("image", $data['image']);
        $stms->bindParam("admin_id", $data['admin_id']);


        if($stms->execute()) return "insert post succesed";
        else return "insert post failed";
    }
    public static function Count() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT COUNT(*) FROM `posts` ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    
}
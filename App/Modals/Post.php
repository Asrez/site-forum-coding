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

        $stms = "SELECT * FROM `questions` WHERE id = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);

    }
    public static function GetAll() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT * FROM `questions` ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Innerjoin() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT `users`.`id` ,
         `users`.`image` as userimage ,
         `users`.`username` ,
         `questions`.`title` ,
         `questions`.`image` ,
         `questions`.`id` ,
         `questions`.`viewcount` ,
         `questions`.`likes` ,
         `questions`.`content` 
        FROM `questions`
        INNER JOIN `users` ON `questions`.`admin_id` = `users`.`id` ;";

        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Delete(int $id) 
    {
        $db = Database::getInstance()->getConnection();

        $stms = "DELETE FROM `questions` WHERE id = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("delete post success");
            location.replace("/manageposts");
        </script>
        <?php
    }
    public static function Update(array $data) 
    {
        $db = Database::getInstance()->getConnection();

        $stms = "UPDATE `questions` SET `title` = :title, `content` = :content, `image`= :image WHERE `id` = :id ;";
        
        $stms = $db->prepare($stms);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("image", $data['image']);
        $stms->bindParam("id", $data['id']);

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("update post success");
            location.replace("/manageposts");
        </script>
        <?php
    }
    public static function Insert(array $data)
    {

        $date = date("Y-m-d");

        $db = Database::getInstance()->getConnection();

        $stms = "INSERT INTO `questions`(`id`, `title`, `date`, `content`, `image`, `admin_id`, `state`, `likes`, `viewcount`) VALUES (NULL, :title, :date, :content, :image, :admin_id, 0, 0, 0);";
        
        $stms = $db->prepare($stms);
        $stms->bindParam("title", $data['title']);
        $stms->bindParam("date", $date);
        $stms->bindParam("content", $data['content']);
        $stms->bindParam("image", $data['image']);
        $stms->bindParam("admin_id", $data['admin_id'] );

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("insert post success");
            location.replace("/manageposts");
        </script>
        <?php
    
    }
    public static function Count() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms = "SELECT COUNT(*) as count FROM `questions` ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_viewcount(int $id)
    {
        $db = Database::getInstance()->getConnection();
        $stms = "UPDATE `questions` SET `viewcount`=`viewcount` + 1 WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id" , $id);
        $stms->execute();
    }
    
    public static function Confirm(int $id) 
    {
        $db = Database::getInstance()->getConnection();

        $stms = "UPDATE `questions` SET `state` = 1 WHERE `id` = :id ;";
        
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);

        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("post confirmed");
            location.replace("/manageposts");
        </script>
        <?php
    }
    public static function search(string $title) : array
    {
        $db = Database::getInstance()->getConnection();

        $posts = "SELECT * FROM `questions` WHERE `questions`.`title` LIKE :title ;";
        $title = '%'.$title.'%';
        $posts = $db->prepare($posts);
        $posts->bindParam("title", $title);
        $posts->execute();

        return $posts->fetchAll(PDO::FETCH_ASSOC);
    }
}
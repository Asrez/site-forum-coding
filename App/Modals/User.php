<?php
namespace App\Modals;

use App\Database\Database;
use PDO;
use PDOException;
class User
{
    public static function GetById(int $id) : array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `users` WHERE `id` = :id ;";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function GetAll() : array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `users` ;";
        
        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Delete(int $id) : void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "DELETE FROM `users` WHERE `id` = :id ;";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("id", $id);
        
        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("delete user successed");
            location.replace("/manageusers");
        </script>
        <?php
    }
    public static function Update(array $data) : void
    {
        try {
            $db = Database::getInstance()->getConnection();

            $sql = "UPDATE `users` SET `name` = :name, `username`= :username, `password` = :password, `image` = :image, `email`= :email  WHERE `id` = :id ;";
           
            $stms = $db->prepare($sql);
            $stms->bindParam("name", $data['name']);
            $stms->bindParam("username", $data['username']);
            $stms->bindParam("password", $data['password']);
            $stms->bindParam("image", $data['image']);
            $stms->bindParam("email", $data['email']);
            $stms->bindParam("id", $data['id']);
            
            $stms->execute();
            ?>
            <script type="text/javascript">
                window.alert("update user successed");
                location.replace("/manageusers");
            </script>
            <?php
        } catch (PDOException) {
            ?>
            <script type="text/javascript">
                window.alert("change the username");
                location.replace("/upuser/<?= $data['id'] ?>");
            </script>
            <?php
        }
        
    }
    public static function Update2(array $data) : void
    {
        try {
            $db = Database::getInstance()->getConnection();

            $sql = "UPDATE `users` SET `name` = :name, `username`= :username, `password` = :password,`image` = :image, `email`= :email  WHERE `id` = :id ;";
            
            $stms = $db->prepare($sql);
            $stms->bindParam("name", $data['name']);
            $stms->bindParam("username", $data['username']);
            $stms->bindParam("password", $data['password']);
            $stms->bindParam("email", $data['email']);
            $stms->bindParam("image", $data['image']);
            $stms->bindParam("id", $data['id']);
            
            $stms->execute();
            ?>
            <script type="text/javascript">
                window.alert("your accont updated");
                location.replace("/profile");
            </script>
            <?php
        } catch (PDOException) {
            ?>
            <script type="text/javascript">
                window.alert("change the username");
                location.replace("/edit");
            </script>
            <?php
        }
        
    }
    public static function Insert(array $data) : void
    {
        try {
        $db = Database::getInstance()->getConnection();

        $sql = "INSERT INTO `users`(`id`, `name`, `username`, `password`, `image` , `email`, `state`) VALUES (NULL, :name, :username, :password, :image, :email, :state);";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("name", $data['name']);
        $stms->bindParam("username", $data['username']);
        $stms->bindParam("password", $data['password']);
        $stms->bindParam("email", $data['email']);
        $stms->bindParam("image", $data['image']);
        $stms->bindParam("state", $data['state']);
        
        $stms->execute();
        ?>
        <script type="text/javascript">
            window.alert("insert user successed");
            location.replace("/manageusers");
        </script>
        <?php
        } catch (PDOException) {
            ?>
            <script type="text/javascript">
                window.alert("change the username");
                location.replace("/inuser");
            </script>
            <?php
        }
    }
    public static function Insert2(array $data) : void
    {
        try {
        $db = Database::getInstance()->getConnection();

        $sql = "INSERT INTO `users`(`id`, `name`, `username`, `password`, `image` , `email`, `state`) VALUES (NULL, :name, :username, :password, :image, :email, 0);";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("name", $data['name']);
        $stms->bindParam("username", $data['username']);
        $stms->bindParam("password", $data['password']);
        $stms->bindParam("email", $data['email']);
        $stms->bindParam("image", $data['image']);        
        $stms->execute();

        $sql2 = "SELECT * FROM `users` WHERE `username` = :username ;";
       
        $stms2 = $db->prepare($sql2);
        $stms2->bindParam("username", $data['username']);
        $stms2->execute();
        $row = $stms2->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $row['id'];

        ?>
        <script type="text/javascript">
            window.alert("regestration is done");
            location.replace("/");
        </script>
        <?php
        } catch (PDOException) {
            ?>
            <script type="text/javascript">
                window.alert("change the username");
                location.replace("/");
            </script>
            <?php
        }
    }
    public static function Count() : array
    {
        $db = Database::getInstance()->getConnection();

        $sql="SELECT COUNT(*) as count FROM `users` WHERE `state` = 0;";
        
        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function Count2() : array
    {
        $db = Database::getInstance()->getConnection();

        $sql="SELECT COUNT(*) as count FROM `users` WHERE `state` = 1;";
        
        $stms = $db->prepare($sql);
        $stms->execute();

        return $stms->fetch(PDO::FETCH_ASSOC);
    }
    public static function search(string $title) : array
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `users` WHERE `users`.`name` LIKE :title ;";
        
        $title = '%'.$title.'%';
        $users = $db->prepare($sql);
        $users->bindParam("title", $title);
        $users->execute();
        
        return $users->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Login(string $username, string $password) : void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :password AND `state` = 1;";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("password", $password);
        $stms->bindParam("username", $username);
        $stms->execute();

        if ($row = $stms->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['admin_id'] = $row['id'];
            ?>
            <script type="text/javascript">
                window.alert("welcome");
                location.replace("/panel");
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                window.alert("The information is incorrect");
                location.replace("/login");
            </script>
            <?php
        }
        
    }
    public static function Login2(string $username, string $password) : void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :password ;";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("password", $password);
        $stms->bindParam("username", $username);
        $stms->execute();

        if ($row = $stms->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['admin_id'] = $row['id'];
            ?>
            <script type="text/javascript">
                window.alert("welcome");
                location.replace("/");
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                window.alert("The information is incorrect");
                location.replace("/");
            </script>
            <?php
        }
    }

    public static function Delimg(int $id) : void
    {
        $db = Database::getInstance()->getConnection();

        $sql = "UPDATE `users` SET `image` = 'default.png' WHERE `id` = :id ;";
        
        $stms = $db->prepare($sql);
        $stms->bindParam("id", $id);
        $stms->execute();

        ?>
            <script type="text/javascript">
                window.alert("your image deleted");
                location.replace("/setting/<?= $id ?>");
            </script>
        <?php
    }
}
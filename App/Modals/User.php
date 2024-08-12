<?php

namespace App\Modals;

use App\Database\Database;
use PDO;
class User
{
    public function __construct(int $id, string $name, string $username, string $email, string $password, int $state)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->state = $state;
    }
    public static function GetById(int $id) : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT * FROM `users` WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function GetAll() : array
    {
        $db = Database::getInstance()->getConnection();

        $stms="SELECT * FROM `users` ;";
        $stms = $db->prepare($stms);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Delete(int $id) : string
    {
        $db = Database::getInstance()->getConnection();

        $stms="DELETE FROM `users` WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("id", $id);
        
        if($stms->execute()) return "delete user succesed";
        else return "delete user failed";
    }
    public static function Update(int $id, array $data) : string
    {
        $db = Database::getInstance()->getConnection();

        $stms="UPDATE `users` SET `name`= :name ,`username`= :username ,`password`=:password ,`email`= :email  WHERE `id` = :id ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("name", $data['name']);
        $stms->bindParam("username", $data['username']);
        $stms->bindParam("password", $data['password']);
        $stms->bindParam("email", $data['email']);
        $stms->bindParam("id", $id);
        
        if($stms->execute()) return "update user succesed";
        else return "update user failed";
    }
    public static function Insert(array $data) : string
    {
        $db = Database::getInstance()->getConnection();

        $stms="INSERT INTO `users`(`id`, `name`, `username`, `password`, `email`, `state`) VALUES (NULL , :name , :username , :password , :email , :state) ;";
        $stms = $db->prepare($stms);
        $stms->bindParam("name", $data['name']);
        $stms->bindParam("username", $data['username']);
        $stms->bindParam("password", $data['password']);
        $stms->bindParam("email", $data['email']);
        $stms->bindParam("email", $data['state']);
        $stms->bindParam("id", $id);
        
        if($stms->execute()) return "insert user succesed";
        else return "insert user failed";
    }
}
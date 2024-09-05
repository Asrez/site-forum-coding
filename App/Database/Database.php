<?php

namespace App\Database;

use PDO;
use PDOException;
class Database
{
    private static $instance = null;
    private $connect;

    private function __construct()
    {
        $DBinfo = require __DIR__ .DIRECTORY_SEPARATOR. "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."database.php";

        try {

            $db = "mysql:host={$DBinfo['host']};dbname={$DBinfo['dbname']}";

            $this->connect = new PDO($db, $DBinfo['username'], $DBinfo['password']);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            echo $e->getMessage();
            exit();

        }

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {

        return $this->connect;
    }
}
<?php

namespace App\Controller;

use flight;
class IndexController
{
    public function index()
    {
        require __DIR__ ."/../../Views/index.php";
    }
}
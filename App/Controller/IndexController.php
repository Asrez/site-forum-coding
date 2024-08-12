<?php

namespace App\Controller;

class IndexController
{
    public function index()
    {
        require __DIR__ ."/../../Views/index.php";
    }
}
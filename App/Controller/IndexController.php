<?php

namespace App\Controller;


use App\Actions\Posts\GetAllP;
use App\Actions\Users\GetAllU;
use App\Actions\Users\GetByIdU;

class IndexController
{
    public function index()
    {
        $admin = GetByIdU::execute(1);
        $posts = GetAllP::execute();
        $users = GetAllU::execute();
        require __DIR__ ."/../../Views/index.php";
    }
}
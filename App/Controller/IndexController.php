<?php

namespace App\Controller;


use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Likes\CountL;
use App\Actions\Views\CountV;

class IndexController
{
    public function index()
    {
        // $setting=;
        $admin = GetByIdU::execute(1);

        $countlike=CountL::execute()['count'];
        $countview=CountV::execute()['count'];
        $countpost=CountP::execute()['count'];
        $countuser=CountU::execute()['count'];

        $posts = GetAllP::execute();
        $users = GetAllU::execute();
        
        require __DIR__ ."/../../Views/index.php";
    }
}
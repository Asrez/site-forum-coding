<?php

namespace App\Controller;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Likes\CountL;
use App\Actions\Views\CountV;
use App\Actions\Setting\Allsetting;
use App\Actions\Search\SearchAll;

class IndexController
{
    public function index()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);

        $countlike=CountL::execute()['count'];
        $countview=CountV::execute()['count'];
        $countpost=CountP::execute()['count'];
        $countuser=CountU::execute()['count'];

        $posts = GetAllP::execute();
        $users = GetAllU::execute();
        
        require __DIR__ ."/../../Views/index.php";
    }
    public function result_search()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);

        if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

            $title = $_POST['searchbox'];

            $all = SearchAll::execute($title);
            $posts = $all['posts'];
            $users = $all['users'];

            require __DIR__."/../../Views/search-results.php";

        }
        else{
            $countlike=CountL::execute()['count'];
            $countview=CountV::execute()['count'];
            $countpost=CountP::execute()['count'];
            $countuser=CountU::execute()['count'];

            $posts = GetAllP::execute();
            $users = GetAllU::execute();

            require __DIR__."/../../Views/index.php";
        }
        
    }
}
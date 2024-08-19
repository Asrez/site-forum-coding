<?php

namespace App\Controller;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Setting\Advers;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Likes\CountL;
use App\Actions\Views\CountV;
use App\Actions\Setting\Allsetting;
use App\Actions\Search\SearchAll;

class IndexController
{
    public function Main_index()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        
        $advers = Advers::execute();
        $questions = GetAllP::execute();
        
        require __DIR__ ."/../../Views/Main_index.php";
    }
    public function Main_index2()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $questions = GetAllP::execute();
        $advers = Advers::execute();
        
        require __DIR__ ."/../../Views/Main_index2.php";
    }
    public function index()
    {
        if(isset($_SESSION['admin_id'])){
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
        else{
            require __DIR__ ."/../../Views/sign-in.php";
        }
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
    public function logout()
    {
        session_unset();
        session_destroy();
        ?>
        <script type="text/javascript">
            window.alert("you got out");
            location.replace("/panel");
        </script>
        <?php
    }
    public function search_result_main()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $advers = Advers::execute();
        if (isset($_POST['search']) && ! empty($_POST['search'])){

            $title = $_POST['search'];

            $all = SearchAll::execute($title);
            $questions = $all['posts'];

            require __DIR__."/../../Views/Main_index.php";
        }
    }
}
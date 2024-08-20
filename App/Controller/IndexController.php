<?php

namespace App\Controller;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Setting\Advers;
use App\Actions\Setting\Settings;
use App\Actions\Setting\UpdateS;
use App\Actions\Setting\GetByIdS;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Views\CountV;
use App\Actions\Setting\Allsetting;
use App\Actions\Search\SearchAll;

class IndexController
{
    //Main
    public function Main_index()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");
        $twitter = Allsetting::execute("twitter");
        $github = Allsetting::execute("github");
        $youtube = Allsetting::execute("youtube");
        $advers = Advers::execute();
        $questions = GetAllP::execute2();
        
        require __DIR__ ."/../../Views/Main_index.php";
    }
    public function Main_index2()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");
        $twitter = Allsetting::execute("twitter");
        $github = Allsetting::execute("github");
        $youtube = Allsetting::execute("youtube");
        $questions = GetAllP::execute2();
        $advers = Advers::execute();
        
        require __DIR__ ."/../../Views/Main_index2.php";
    }
    public function search_result_main()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");
        $twitter = Allsetting::execute("twitter");
        $github = Allsetting::execute("github");
        $youtube = Allsetting::execute("youtube");
        $advers = Advers::execute();
        if (isset($_POST['search']) && ! empty($_POST['search'])){

            $title = $_POST['search'];

            $all = SearchAll::execute($title);
            $questions = $all['posts'];

            require __DIR__."/../../Views/Main_index.php";
        }
    }
    public function logout2()
    {
        session_unset();
        session_destroy();
        ?>
        <script type="text/javascript">
            window.alert("you got out");
            location.replace("/");
        </script>
        <?php
    }

    //Admin panel
    public function index()
    {
        if(isset($_SESSION['admin_id'])){
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            if($admin['state'] === 0) {
                require __DIR__ ."/../../Views/sign-in.php";
            }
            $countadmin=CountU::execute2()['count'];
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
    public function site_setting()
    {
        if(isset($_SESSION['admin_id'])){
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $advers = Advers::execute();
            $settings = Settings::execute();
            if($admin['state'] === 0) {
                require __DIR__ ."/../../Views/sign-in.php";
            }
            require __DIR__ ."/../../Views/managesetting.php";
        }
        else{
            require __DIR__ ."/../../Views/sign-in.php";
        }
    }
    public function go_setting(int $id){
        $setting = GetByIdS::execute($id);
        require __DIR__."/../../Views/settingupdate.php";
    }
    public function setting_update(int $id)
    {
        if(isset($_SESSION['admin_id'])){
            if (isset($_POST['btnupdatesetting'])){
                if (isset($_POST['title']) &&
                isset($_POST['link']) &&
                isset($_POST['content']) &&
                isset($_POST['value']) ){

                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $content = $_POST['content'];
                    $value = $_POST['value'];
                    $data = [
                        "title" => $title ,
                        "link" => $link ,
                        "content" => $content ,
                        "value" => $value,
                        "id" => $id
                    ];
                    UpdateS::execute($data);

                }

            }
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
            $countadmin=CountU::execute2()['count'];
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
    
}
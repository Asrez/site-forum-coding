<?php

namespace App\Controller;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Posts\Chart;
use App\Actions\Setting\Advers;
use App\Actions\Setting\Settings;
use App\Actions\Setting\UpdateS;
use App\Actions\Setting\GetByIdS;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Views\CountV;
use App\Actions\Search\Postsearch;
use App\Actions\Search\SearchAll;

use Flight;

class IndexController
{
    public function site_map()
    {
        Flight::render(__DIR__ ."/../../Views/sitemap.php");
    }
    public function Main_index()
    {
        $tool = tools();
        $advers = Advers::execute();
        $questions = GetAllP::execute2();
        
        Flight::render(__DIR__ ."/../../Views/index.php",
        ['logo'=> $tool['logo'] , 
        'logo_footer'=> $tool['logo_footer'] ,
        'footer'=> $tool['footer'] ,
        'title'=> $tool['title'] ,
        'twitter'=> $tool['twitter'] ,
        'github'=> $tool['github'] ,
        'youtube'=> $tool['youtube'] ,
        'advers'=> $advers ,
        'questions'=> $questions
        ]);

    }
    public function Main_index2()
    {
        $tool = tools();
        $questions = GetAllP::execute2();
        $advers = Advers::execute();
        
        Flight::render(__DIR__ ."/../../Views/index2.php",
        ['logo'=> $tool['logo'] , 
        'logo_footer'=> $tool['logo_footer'] ,
        'footer'=> $tool['footer'] ,
        'title'=> $tool['title'] ,
        'twitter'=> $tool['twitter'] ,
        'github'=> $tool['github'] ,
        'youtube'=> $tool['youtube'] ,
        'advers'=> $advers ,
        'questions'=> $questions
        ]);
    }
    public function search_result_main()
    {
        $tool = tools();
        $advers = Advers::execute();
        $questions = GetAllP::execute2();
        if (isset($_GET['q']) && ! empty($_GET['q'])) {

            $questions = Postsearch::execute2($_GET['q']);
        }
        Flight::render(__DIR__ ."/../../Views/index.php",
        ['logo'=> $tool['logo'] , 
        'logo_footer'=> $tool['logo_footer'] ,
        'footer'=> $tool['footer'] ,
        'title'=> $tool['title'] ,
        'twitter'=> $tool['twitter'] ,
        'github'=> $tool['github'] ,
        'youtube'=> $tool['youtube'] ,
        'advers'=> $advers ,
        'questions'=> $questions
        ]);
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

    public function index()
    {   
        $tool = tools();

        if(isset($_SESSION['admin_id'])) {
            
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            if($admin['state'] === 0) {
                return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
            }
            $chart = Chart::execute();
            foreach ($chart as $ch) {
                $chart_viewcount [] = $ch['viewcount'];
                $chart_title [] = $ch['title'];
            }

            $countadmin = CountU::execute2()['count'];
            $countview = CountV::execute()['count'];
            $countpost = CountP::execute()['count'];
            $countuser=CountU::execute()['count'];
            $posts = GetAllP::execute();
            $users = GetAllU::execute();
            
            Flight::render(__DIR__ ."/../../Views/panel/index.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'admin'=> $admin ,
            'countadmin'=> $countadmin ,
            'countview'=> $countview ,
            'countpost'=> $countpost ,
            'countuser'=> $countuser ,
            'posts'=> $posts ,
            'users'=> $users ,
            'chart_viewcount'=> $chart_viewcount ,
            'chart_title'=> $chart_title 
            ]);
        }
        else
        return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
    }
    public function site_setting()
    {
        $tool = tools();
        $advers = Advers::execute();
        $settings = Settings::execute();

        if(isset($_SESSION['admin_id'])) {
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            if($admin['state'] === 0) {
                return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
            }
            else {
                Flight::render(__DIR__ ."/../../Views/panel/managesetting.php",
                ['logo'=> $tool['logo'] , 
                'logo_footer'=> $tool['logo_footer'] ,
                'footer'=> $tool['footer'] ,
                'title'=> $tool['title'] ,
                'advers'=> $advers ,
                'settings'=> $settings ,
                'admin'=> $admin 
                ]);
            }
        }
        else
        return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
    }
    public function go_setting(int $id) 
    {
        if (isset($_SESSION['admin_id']) ){
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            if ($admin['state'] === 1){
                $tool = tools();
                $setting = GetByIdS::execute($_SESSION['admin_id']);

                Flight::render(__DIR__ ."/../../Views/panel/settingupdate.php",
                ['logo'=> $tool['logo'] , 
                'logo_footer'=> $tool['logo_footer'] ,
                'footer'=> $tool['footer'] ,
                'title'=> $tool['title'] ,
                'setting'=> $setting ,
                'admin'=> $admin ,
                'id'=> $id 
                ]);
            }
        }
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
                    ?>
                    <script type="text/javascript">
                        window.alert("updated");
                        location.replace("/manage/site_setting");
                    </script>
                    <?php

                }

            }
        }
            
    }
    public function result_search()
    {
        $tool = tools();

        $admin = GetByIdU::execute($_SESSION['admin_id']);

        if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

            $titlee = $_POST['searchbox'];

            $all = SearchAll::execute($titlee);
            $posts = $all['posts'];
            $users = $all['users'];

            Flight::render(__DIR__ ."/../../Views/panel/search-results.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'users'=> $users ,
            'posts'=> $posts ,
            'admin'=> $admin
            ]);

        }
        else{
            $countadmin=CountU::execute2()['count'];
            $countview=CountV::execute()['count'];
            $countpost=CountP::execute()['count'];
            $countuser=CountU::execute()['count'];

            $posts = GetAllP::execute();
            $users = GetAllU::execute();

            Flight::render(__DIR__ ."/../../Views/index.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'users'=> $users ,
            'posts'=> $posts ,
            'admin'=> $admin ,
            'countadmin'=> $countadmin ,
            'countview'=> $countview ,
            'countpost'=> $countpost ,
            'countuser'=> $countuser ,
            ]);
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
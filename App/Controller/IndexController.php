<?php

namespace App\Controller;

use App\Actions\Setting\UpdateS;
use App\Actions\Setting\GetByIdS;
use App\Actions\Search\Postsearch;

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
        
        return index_main($tool);
    }
    public function Main_index2()
    {
        return index_main2();
    }
    public function search_result_main()
    {
        $tool = tools();

        if (isset($_GET['q']) && ! empty($_GET['q'])) {

            $tool['questions'] = Postsearch::execute2($_GET['q']);
        }

        return index_main($tool); 
    }

    public function index()
    {   
        $tool = tools();
        $admin = session_admin();

        if($admin === false) return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        return panel_index($tool, $admin);
    }
    public function site_setting()
    {
        $tool = tools();
        $admin = session_admin();

        if($admin === false) return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else return manage_setting($tool, $admin);
    }
    public function go_setting(int $id) 
    {
        $tool = tools();
        $admin = session_admin();
        if ($admin === false) return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $setting = GetByIdS::execute($_SESSION['admin_id']);
            return setting_update($tool, $admin, $setting, $id);
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
                    Flight::redirect("/manage/site_setting?status=SettingUpdate");
                }

            }
        }
            
    }
    public function result_search()
    {
        $tool = tools();
        $admin = session_admin();
        
        if ($admin === false) return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

                $titlee = $_POST['searchbox'];
                return panel_search_all($tool, $admin, $titlee);

            }
            else return panel_index($tool, $admin);
        }
        
    }
    public function logout()
    {
        session_unset();
        session_destroy();
    }
}
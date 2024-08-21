<?php 

namespace App\Controller;


use flight;

use App\Actions\Users\GetByIdU;
use App\Actions\Views\InsertV;
use App\Actions\Comments\AllCommentsByQId;
use App\Actions\Comments\AddComment;
use App\Actions\Posts\GetAllP;
use App\Actions\Posts\ConfirmP;
use App\Actions\Posts\GetByIdP;
use App\Actions\Posts\UpdateP;
use App\Actions\Posts\InsertP;
use App\Actions\Posts\DeleteP;
use App\Actions\Posts\Innerjoin;
use App\Actions\Search\Postsearch;
use App\Actions\Setting\Allsetting;


class PostController
{
    public function Insert()
    {
        if(isset($_POST["btninpost"])){
            if(isset($_POST['title']) && !empty($_POST['title'])
            && isset($_POST['content']) && !empty($_POST['content'])
            && isset($_POST['admin_id']) && !empty($_POST['admin_id'])){
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = basename($_FILES["image"]["name"]);
                if($image === "") $image = "1.jpg";
                $admin_id = $_POST['admin_id'];
                $data = [
                    'title'=> $title,
                    'content'=> $content,
                    'image'=> $image,
                    'admin_id'=> $admin_id
                ];

                InsertP::execute($data);
                
            }
        }
        
    }

    public function Update(int $id)
    {
        if(isset($_POST["btnupdate"])){
            if(isset($_POST['title']) && !empty($_POST['title'])
            && isset($_POST['content']) && !empty($_POST['content'])){
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "") $image = GetByIdP::execute($id)['image'];
                $data = [
                    'title'=> $title,
                    'content'=> $content,
                    'image'=> $image,
                    'id'=> $id
                ];

                UpdateP::execute($data);
                
            }
        }
    }

    public function Delete(int $id)
    {
        DeleteP::execute($id);
    }

    public function GetAll()
    {
        if (isset($_SESSION['admin_id'])){       
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");

            $posts = GetAllP::execute();
            $admin = GetByIdU::execute($_SESSION['admin_id']);

            require __DIR__."/../../views/Posts.php";
        }
        else {
            require __DIR__ ."/../../Views/sign-in.php";
        }
    }

    public function Manage()
    {
        if (isset($_SESSION['admin_id'])){       
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $posts = GetAllP::execute();
            require __DIR__."/../../Views/managepost.php";
        }
        else {
            require __DIR__ ."/../../Views/sign-in.php";
        }
    }
    public function Gallery()
    {
        if (isset($_SESSION['admin_id'])){       
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $posts = Innerjoin::execute();
            require __DIR__."/../../Views/gallery.php";
        }
        else {
            require __DIR__ ."/../../Views/sign-in.php";
        }
        
    }

    public function Upform(int $id)
    {
        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $this_post = GetByIdP::execute($id);
        require __DIR__."/../../views/updatepost.php";
    }
    public function Confirmed(int $id)
    {
        ConfirmP::execute($id);
    }
    public function result_search()
    {
        if (isset($_SESSION['admin_id'])){       
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");

            $admin = GetByIdU::execute($_SESSION['admin_id']);

            if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

                $title = $_POST['searchbox'];
                $posts = Postsearch::execute($title);

                require __DIR__."/../../Views/managepost.php";

            }
            else{

                $posts = GetAllP::execute();

                require __DIR__."/../../Views/managepost.php";
            }
        }
        else {
            require __DIR__ ."/../../Views/sign-in.php";
        }
    }
    public function GetById(int $id)
    {
        if (isset($_SESSION['admin_id'])){       
            $logo = Allsetting::execute("logo");
            $footer = Allsetting::execute("footer");

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $post = GetByIdP::execute($id);
            
            require __DIR__."/../../Views/post.php";
        }
        else {
            require __DIR__ ."/../../Views/sign-in.php";
        }
        
    }
    public function add_question()
    {
        if (isset($_SESSION['admin_id'])) {
            if(isset($_POST['btnAddQuestion'])){
                if(isset($_POST['title']) && !empty($_POST['title'])
                && isset($_POST['content']) && !empty($_POST['content'])
                && isset($_POST['admin_id']) && !empty($_POST['admin_id'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $image = basename($_FILES["image"]["name"]);
                    if($image === "") $image = "1.jpg";
                    $admin_id = $_POST['admin_id'];
                    $data = [
                        'title'=> $title,
                        'content'=> $content,
                        'image'=> $image,
                        'admin_id'=> $admin_id
                    ];

                    InsertP::execute2($data);
                }
            }
        }
        else{
            ?>
            <script type="text/javascript">
                window.alert("Log in first");
                location.replace("/");
            </script>
            <?php

        }
    }

    public function show_post(int $id)
    {    
        //get ip
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];

        InsertV::execute($id, $ip);
        $logo_footer = Allsetting::execute("logo_footer");
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");
        $twitter = Allsetting::execute("twitter");
        $github = Allsetting::execute("github");
        $youtube = Allsetting::execute("youtube");
        $answers = Innerjoin::execute2($id);
        $post = GetByIdP::execute($id);
        $user = GetByIdU::execute($post['admin_id']);
        if ($post['state'] === 1){
            $reply_post_id = $id;
            require __DIR__."/../../Views/Main_conversation.php";
        }
        else{
            require __DIR__."/../../public/error-404.html";
        }
        
    }
    public function add_reply(int $id)
    {
        if (isset($_SESSION['admin_id'])) {
            if(isset($_POST['btnnewreply'])){
                if(isset($_POST['title']) && !empty($_POST['title'])
                && isset($_POST['answer']) && !empty($_POST['answer'])){
                    $title = $_POST['title'];
                    $answer = $_POST['answer'];
                    $data = [
                        'title'=> $title,
                        'answer'=> $answer,
                        'question_id'=> $id,
                        'user_id'=> $_SESSION['admin_id']
                    ];
                    
                    AddComment::execute($data);
                }
            }
        } else{
            ?>
            <script type="text/javascript">
                window.alert("Log in first");
                location.replace("/");
            </script>
            <?php

        }
    }
    
}
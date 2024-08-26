<?php 

namespace App\Controller;

use flight;

use App\Actions\Users\GetByIdU;
use App\Actions\Views\InsertV;
use App\Actions\Comments\AddComment;
use App\Actions\Comments\DeleteC;
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
                ?>
                <script type="text/javascript">
                    window.alert("insert post success");
                    location.replace("/managepost");
                </script>
                <?php  
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
                ?>
                <script type="text/javascript">
                    window.alert("update post success");
                    location.replace("/managepost");
                </script>
                <?php
            }
        }
    }

    public function Delete(int $id)
    {
        DeleteP::execute($id);
        ?>
        <script type="text/javascript">
            window.alert("delete post success");
            location.replace("/managepost");
        </script>
        <?php
    }

    public function GetAll()
{       $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");

        if (isset($_SESSION['admin_id'])){       
            

            $posts = GetAllP::execute();
            $admin = GetByIdU::execute($_SESSION['admin_id']);

            Flight::render(__DIR__ ."/../../views/panel/posts.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title ,
            'posts'=> $posts ,
            'admin'=> $admin 
            ]);
        }
        else {
            Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title 
            ]);
        }
    }

    public function Manage()
    {
        $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");

        if (isset($_SESSION['admin_id'])){       
            

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $posts = GetAllP::execute();
            
            Flight::render(__DIR__ ."/../../Views/panel/managepost.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title ,
            'posts'=> $posts ,
            'admin'=> $admin 
            ]);
        }
        else {
            Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title 
            ]);
        }
    }
    public function Gallery()
    {
        $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $posts = Innerjoin::execute();
            
            Flight::render(__DIR__ ."/../../Views/panel/gallery.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title ,
            'posts'=> $posts ,
            'admin'=> $admin 
            ]);
        }
        else {
            Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title 
            ]);
        }
        
    }

    public function Upform(int $id)
    {
        $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");
        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $this_post = GetByIdP::execute($id);

        Flight::render(__DIR__ ."/../../views/panel/updatepost.php",
        ['logo'=> $logo , 
        'logo_footer'=> $logo_footer,
        'footer'=> $footer ,
        'title'=> $title ,
        'this_post'=> $this_post ,
        'admin'=> $admin ,
        'id'=> $id
        ]);
    }
    public function Confirmed(int $id)
    {
        ConfirmP::execute($id);
        ?>
        <script type="text/javascript">
            window.alert("post confirmed");
            location.replace("/managepost");
        </script>
        <?php
    }
    public function result_search()
    {
        $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);

            if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

                $titlee = $_POST['searchbox'];
                $posts = Postsearch::execute($titlee);

                Flight::render(__DIR__ ."/../../Views/panel/managepost.php",
                ['logo'=> $logo , 
                'logo_footer'=> $logo_footer,
                'footer'=> $footer ,
                'title'=> $title ,
                'posts'=> $posts ,
                'admin'=> $admin 
                ]);

            }
            else{

                $posts = GetAllP::execute();

                Flight::render(__DIR__ ."/../../Views/panel/managepost.php",
                ['logo'=> $logo , 
                'logo_footer'=> $logo_footer,
                'footer'=> $footer ,
                'title'=> $title ,
                'posts'=> $posts ,
                'admin'=> $admin 
                ]);
            }
        }
        else {
            Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title 
            ]);
        }
    }
    public function GetById(int $id)
    {
        $logo = Allsetting::execute("logo");
        $logo_footer = Allsetting::execute("logo_footer");
        $footer = Allsetting::execute("footer");
        $title = Allsetting::execute("title");

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $post = GetByIdP::execute($id);
            
            if ($post === false)  Flight::render(__DIR__ ."/../../public/error-404.php");
            else {
                Flight::render(__DIR__ ."/../../Views/panel/post.php",
                ['logo'=> $logo , 
                'logo_footer'=> $logo_footer,
                'footer'=> $footer ,
                'title'=> $title ,
                'post'=> $post ,
                'admin'=> $admin ,
                'id'=> $id 
                ]);
            }
        }
        else {
            Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title 
            ]);
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
                    ?>
                    <script type="text/javascript">
                        window.alert("your question added .wait for confirmed by admins");
                        location.replace("/");
                    </script>
                    <?php
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

            Flight::render(__DIR__ ."/../../Views/conversation.php",
            ['logo'=> $logo , 
            'logo_footer'=> $logo_footer,
            'footer'=> $footer ,
            'title'=> $title ,
            'post'=> $post ,
            'user'=> $user ,
            'reply_post_id'=> $reply_post_id ,
            'twitter'=> $twitter ,
            'github'=> $github ,
            'youtube'=> $youtube ,
            'answers'=> $answers ,
            'id'=> $id
            ]);
        }
        else{
            Flight::render(__DIR__ ."/../../public/error-404.php");
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
                    ?>
                    <script type="text/javascript">
                        window.alert("your reply added");
                        location.replace("//show_post/<?= $data['question_id'] ?>")
                    </script>
                    <?php
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
    public function Del_reply(int $id)
    {
        if (isset($_SESSION['admin_id'])) {
            if(isset($_POST['btndelreply'])){
                DeleteC::execute($id);

                ?>
                <script type="text/javascript">
                    window.alert("your reply deleted");
                </script>
                <?php
                }
            }
    }
    
}
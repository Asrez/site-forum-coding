<?php

namespace App\Controller;

use App\Actions\Users\GetByIdU;
use App\Actions\Views\InsertV;
use App\Actions\Comments\AddComment;
use App\Actions\Posts\GetAllP;
use App\Actions\Posts\ConfirmP;
use App\Actions\Posts\GetByIdP;
use App\Actions\Posts\UpdateP;
use App\Actions\Posts\InsertP;
use App\Actions\Posts\DeleteP;
use App\Actions\Posts\Innerjoin;
use App\Actions\Search\Postsearch;
use GeekGroveOfficial\PhpSmartValidator\Validator\Validator;

use Flight;

class PostController
{
    public function Insert()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'title' => ['required', 'min:3', 'max:100'],
            'content' => ['required', 'min:8'],
            'admin_id' => ['required']
        ]);

        if ($validator->validate()) {
            if (isset($_POST["btninpost"])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = "1.jpg";
                $admin_id = $_POST['admin_id'];
                $data = [
                    'title' => $title,
                    'content' => $content,
                    'image' => $image,
                    'admin_id' => $admin_id
                ];

                InsertP::execute($data);
                Flight::redirect("/manage/post?status=AddPost");

            }
        } else
            Flight::redirect("/manage/post?status=nofill");
    }

    public function Update(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'title' => ['required', 'min:3', 'max:100'],
            'content' => ['required', 'min:8']
        ]);

        if ($validator->validate()) {
            if (isset($_POST["btnupdate"])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = GetByIdP::execute($id)['image'];
                $data = [
                    'title' => $title,
                    'content' => $content,
                    'image' => $image,
                    'id' => $id
                ];

                UpdateP::execute($data);
                Flight::redirect("/manage/post?status=UpdatePost");
            }
        } else
            Flight::redirect("/manage/post?status=nofill");
    }

    public function Delete(int $id)
    {
        DeleteP::execute($id);
        Flight::redirect("/manage/post?status=DeletePost");
    }

    public function GetAll()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_posts($tool, $admin);
    }

    public function Manage()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_manage_posts($tool, $admin);
    }

    public function Gallery()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_posts($tool, $admin);
    }

    public function Upform(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $this_post = GetByIdP::execute($id);
            return panel_update_page_post($tool, $admin, $this_post, $id);
        }
    }

    public function Confirmed(int $id)
    {
        ConfirmP::execute($id);
        Flight::redirect("/manage/post?status=ConfimedPost");
    }

    public function result_search()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {

            $validator = new Validator(Flight::request()->data->getData(), ['searchbox' => ['required']]);

            if ($validator->validate()) {
                $titlee = $_POST['searchbox'];
                $tool['posts'] = Postsearch::execute($titlee);
            } else
                $tool['posts'] = GetAllP::execute();

            return panel_manage_posts($tool, $admin);
        }
    }

    public function GetById(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $post = GetByIdP::execute($id);

            if ($post === false)
                return error();
            else
                return panel_show_post($tool, $admin, $post, $id);
        }
    }

    public function add_question()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'title' => ['required', 'min:3', 'max:100'],
            'content' => ['required', 'min:8'],
            'admin_id' => ['required'],
        ]);

        if ($validator->validate()) {
            if (isset($_SESSION['admin_id'])) {
                if (isset($_POST['btnAddQuestion'])) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $image = basename($_FILES["image"]["name"]);
                    if ($image === "")
                        $image = "1.jpg";
                    $admin_id = $_POST['admin_id'];
                    $data = [
                        'title' => $title,
                        'content' => $content,
                        'image' => $image,
                        'admin_id' => $admin_id
                    ];

                    InsertP::execute2($data);
                    Flight::redirect("/?status=addquestion");
                }
            }

        } else
            Flight::redirect("/?status=nofill");
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

        $tool = tools();
        $answers = Innerjoin::execute2($id);
        $post = GetByIdP::execute($id);
        $user = GetByIdU::execute($post['admin_id']);
        if ($post['state'] === 1) {
            $reply_post_id = $id;

            return conversation($tool, $user, $post, $answers, $reply_post_id, $id);
        } else
            return error();

    }

    public function add_reply(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'title' => ['required', 'min:3', 'max:100'],
            'answer' => ['required', 'min:8'],
            'admin_id' => ['required'],
        ]);

        if ($validator->validate()) {
            if (isset($_SESSION['admin_id'])) {
                if (isset($_POST['btnnewreply'])) {
                    $title = $_POST['title'];
                    $answer = $_POST['answer'];
                    $data = [
                        'title' => $title,
                        'answer' => $answer,
                        'question_id' => $id,
                        'user_id' => $_SESSION['admin_id']
                    ];

                    AddComment::execute($data);
                    Flight::redirect("/?status=addreply");
                }
            }
        } else
            Flight::redirect("/?status=nofill");
    }
}
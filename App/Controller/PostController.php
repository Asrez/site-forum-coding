<?php

namespace App\Controller;

use App\Actions\Users\GetByIdUser;
use App\Actions\Views\InsertView;
use App\Actions\Comments\AddComment;
use App\Actions\Posts\GetAllPost;
use App\Actions\Posts\ConfirmPost;
use App\Actions\Posts\GetByIdPost;
use App\Actions\Posts\UpdatePost;
use App\Actions\Posts\InsertPost;
use App\Actions\Posts\DeleteP;
use App\Actions\Posts\Innerjoin;
use App\Actions\Search\Postsearch;
use GeekGroveOfficial\PhpSmartValidator\Validator\Validator;

use Flight;

class PostController
{
    public function insert()
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

                InsertPost::execute($data);
                Flight::redirect("/manage/post?status=AddPost");

            }
        } else
            Flight::redirect("/manage/post?status=nofill");
    }

    public function update(int $id)
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
                    $image = GetByIdPost::execute($id)['image'];
                $data = [
                    'title' => $title,
                    'content' => $content,
                    'image' => $image,
                    'id' => $id
                ];

                UpdatePost::execute($data);
                Flight::redirect("/manage/post?status=UpdatePost");
            }
        } else
            Flight::redirect("/manage/post?status=nofill");
    }

    public function delete(int $id)
    {
        DeleteP::execute($id);
        Flight::redirect("/manage/post?status=DeletePost");
    }

    public function getAll()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return getAll($tool, $admin);
    }

    public function panel_manage_posts()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_manage_posts($tool, $admin);
    }

    public function upform(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $this_post = GetByIdPost::execute($id);
            return upform($tool, $admin, $this_post, $id);
        }
    }

    public function confirmed(int $id)
    {
        ConfirmPost::execute($id);
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
                $title2 = $_POST['searchbox'];
                $tool['posts'] = Postsearch::execute($title2);
            } else
                $tool['posts'] = GetAllPost::execute();

            return panel_manage_posts($tool, $admin);
        }
    }

    public function getById(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $post = GetByIdPost::execute($id);

            if ($post === false)
                return error();
            else
                return post_GetById($tool, $admin, $post, $id);
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

                    InsertPost::execute2($data);
                    Flight::redirect("/?status=addquestion");
                }
            }

        } else
            Flight::redirect("/?status=nofill");
    }

    public function conversation(int $id)
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];

        InsertView::execute($id, $ip);

        $tool = tools();
        $answers = Innerjoin::execute2($id);
        $post = GetByIdPost::execute($id);
        $user = GetByIdUser::execute($post['admin_id']);
        if ($post['state'] === 1) {
            $reply_post_id = $id;

            return conversation($tool, $user, $post, $answers, $reply_post_id, $id);
        } else
            return error();

    }

    public function add_reply(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'title' => [],
            'answer' => ['required', 'min:8'],
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
<?php

namespace App\Controller;

use App\Actions\Users\GetAllU;
use App\Actions\Users\GetByIdU;
use App\Actions\Users\UpdateU;
use App\Actions\Users\InsertU;
use App\Actions\Users\DeleteU;
use App\Actions\Users\Login;
use App\Actions\Users\Deleteimg;
use App\Actions\Search\Usersearch;
use Flight;


class UserController
{
    public function Insert()
    {
        if (isset($_POST["btninuser"])) {
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])
                && isset($_POST['state'])
                && isset($_POST['email']) && !empty($_POST['email'])
            ) {
                $name = $_POST['name'];
                $state = $_POST['state'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = "default.png";
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'state' => $state,
                    'image' => $image
                ];


                $result = InsertU::execute($data);

                if ($result === 1) {
                    Flight::redirect("/manage/user?status=tinuser");
                } else {
                    Flight::redirect("/panel/inuser?status=finuser");
                }

            }
        }
    }

    public function Update(int $id)
    {
        if (isset($_POST["btnupuser"])) {
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])
                && isset($_POST['email']) && !empty($_POST['email'])
            ) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = GetByIdU::execute($id)['image'];
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'image' => $image,
                    'id' => $id
                ];

                $result = UpdateU::execute($data);

                if ($result === 1) {
                    Flight::redirect("/manage/user?status=UpdateUser");
                } else {
                    Flight::redirect("/panel/user/?status=fUpdateUser");
                }
            }
        }
    }

    public function updateaccont(int $id)
    {
        if (isset($_POST["btnupuser"])) {
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])
                && isset($_POST['email']) && !empty($_POST['email'])
            ) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = GetByIdU::execute($id)['image'];
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'image' => $image,
                    'id' => $id
                ];

                $result = UpdateU::execute2($data);
                if ($result === 1) {
                    Flight::redirect("/manage/profile?status=MainUpdateAccont");
                }
                else {
                    Flight::redirect("/manage/edit?status=fMainUpdateAccont");
                }
            }
        }
    }
    public function Delete(int $id)
    {
        DeleteU::execute($id);
        Flight::redirect("/panel/user/?status=DeleteUser");
    }

    public function GetAll()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_users($tool, $admin);
    }

    public function Upform(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $this_user = GetByIdU::execute($id);
            return panel_update_page_user($tool, $admin, $this_user, $id);
        }
    }
    public function Addform()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_insert_page_user($tool);
    }
    public function Manage()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_manage_users($tool, $admin);

    }
    public function Setting(int $id)
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            $user = GetByIdU::execute($id);
            if ($admin['id'] === $id)
                return panel_setting($tool, $admin, $user, $id);
            else
                return error();
        }
    }
    public function result_search()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else {
            if (isset($_POST['searchbox']) && !empty($_POST['searchbox'])) {

                $title = $_POST['searchbox'];
                $tool['users'] = Usersearch::execute($title);
            } else
                $tool['users'] = GetAllU::execute();
            return panel_manage_users($tool, $admin);
        }

    }
    public function login()
    {
        $tool = tools();
        $admin = session_admin();

        if ($admin === false) return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else return panel_index($tool, $admin);
    }
    public function login_result()
    {
        if (isset($_POST['btnlogin'])) {
            if (
                isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])
            ) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = Login::execute($username, $password);

                if ($result === 1) {
                    Flight::redirect("/panel?status=correct");
                } else {
                    Flight::redirect("/login?status=incorrect");
                }
            }
        }
    }
    public function Upuser(int $id)
    {
        if (isset($_POST['btnupuser'])) {
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['email']) && !empty($_POST['email'])
            ) {

                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];

                $img = basename($_FILES["image"]["name"]);

                if ($img === "")
                    $img = GetByIdU::execute($id)['image'];

                $password = GetByIdU::execute($id)['password'];

                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'image' => $img,
                    'id' => $id
                ];

                $result = UpdateU::execute($data);

                if ($result === 1) {
                    Flight::redirect("/manage/user?status=UpdateAccont");
                } else {
                    Flight::redirect("/panel/user/?status=fUpdateAccont");
                }
            }
        }
    }
    public function Delimg(int $id)
    {
        Deleteimg::execute($id);
        Flight::redirect("/panel?status=DeleteImg");
    }

    public function log_in_result()
    {
        if (!(isset($_SESSION['admin_id']))) {
            if (isset($_POST['btnlogin'])) {
                if (
                    isset($_POST['username']) && !empty($_POST['username'])
                    && isset($_POST['password']) && !empty($_POST['password'])
                ) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $result = Login::execute2($username, $password);
                    if ($result === 1) {
                        Flight::redirect("/?status=correct");
                    } else {
                        Flight::redirect("/?status=incorrect");
                    }

                }
            }
        }
    }

    public function sign_up()
    {
        if (isset($_POST["btnsignup"])) {
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])
                && isset($_POST['email']) && !empty($_POST['email'])
            ) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if ($image === "")
                    $image = "default.png";
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'image' => $image
                ];


                $result = InsertU::execute2($data);

                if ($result === 1) {
                    Flight::redirect("/?status=signup");
                } else {
                    Flight::redirect("/?status=fsignup");
                }

            }
        }
    }
    public function profile()
    {
        $admin = session_admin2();

        if ($admin === false)
            return error();
        else
            return profile();
    }
    public function edit()
    {
        $tool = tools();
        $admin = session_admin2();

        if ($admin === false)
            return error();
        else
            return edit_profile($tool);
    }

}
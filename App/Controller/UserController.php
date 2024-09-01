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
use GeekGroveOfficial\PhpSmartValidator\Validator\Validator;


class UserController
{
    public function Insert()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'name' => ['required', 'min:3', 'string'],
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50'],
            'state' => ['required'],
            'email' => ['required']
        ]);

        if ($validator->validate()) {

            if (isset($_POST["btninuser"])) {
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
        } else
            Flight::redirect("/manage/user?status=nofill");
    }

    public function Update(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'name' => ['required', 'min:3', 'string'],
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50'],
            'email' => ['required']
        ]);

        if ($validator->validate()) {
            if (isset($_POST["btnupuser"])) {
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
        } else
            Flight::redirect("/manage/user?status=nofill");
    }

    public function updateaccont(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'name' => ['required', 'min:3', 'string'],
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50'],
            'email' => ['required']
        ]);

        if ($validator->validate()) {
            if (isset($_POST["btnupuser"])) {
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
                } else {
                    Flight::redirect("/manage/edit?status=fMainUpdateAccont");
                }

            }
        } else
            Flight::redirect("/manage/edit?status=nofill");
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
            $validator = new Validator(Flight::request()->data->getData(), [
                'searchbox' => ['required']
            ]);

            if ($validator->validate()) {

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

        if ($admin === false)
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        else
            return panel_index($tool, $admin);
    }

    public function login_result()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50']
        ]);

        if ($validator->validate()) {
            if (isset($_POST['btnlogin'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = Login::execute($username, $password);

                if ($result === 1) {
                    Flight::redirect("/panel?status=correct");
                } else {
                    Flight::redirect("/login?status=incorrect");

                }
            }
        } else
            Flight::redirect("/login?status=nofill");
    }

    public function Upuser(int $id)
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50'],
            'email' => ['required']
        ]);

        if ($validator->validate()) {
            if (isset($_POST['btnupuser'])) {

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

                if ($result === 1)
                    Flight::redirect("/manage/user?status=UpdateAccont");
                else
                    Flight::redirect("/panel/user/?status=fUpdateAccont");

            }
        } else
            Flight::redirect("/manage/user?status=nofill");
    }

    public function Delimg(int $id)
    {
        Deleteimg::execute($id);
        Flight::redirect("/panel?status=DeleteImg");
    }

    public function log_in_result()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:3', 'max:50']
        ]);

        if ($validator->validate()) {

            if (!(isset($_SESSION['admin_id']))) {
                if (isset($_POST['btnlogin'])) {
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
        } else
            Flight::redirect("/?status=nofill");
    }

    public function sign_up()
    {
        $validator = new Validator(Flight::request()->data->getData(), [
            'username' => ['required', 'min:3', 'max:50'],
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required'],
            'password' => ['required', 'min:3', 'max:50']
        ]);

        if ($validator->validate()) {
            if (isset($_POST["btnsignup"])) {
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
        } else
            Flight::redirect("/?status=nofill");
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
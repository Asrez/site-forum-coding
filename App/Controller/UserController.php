<?php 

namespace App\Controller;


use flight;

use App\Actions\Users\GetAllU;
use App\Actions\Users\GetByIdU;
use App\Actions\Users\UpdateU;
use App\Actions\Users\InsertU;
use App\Actions\Users\DeleteU;
use App\Actions\Users\Login;
use App\Actions\Users\Deleteimg;
use App\Actions\Users\Updateimg;
use App\Actions\Search\Usersearch;
use App\Actions\Setting\Allsetting;


class UserController
{
    public function Insert()
    {
        if(isset($_POST["btninuser"])){
            if(isset($_POST['name']) && !empty($_POST['name'])
            && isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['password']) && !empty($_POST['password'])
            && isset($_POST['state'])
            && isset($_POST['email']) && !empty($_POST['email'])){
                $name = $_POST['name'];
                $state = $_POST['state'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if($image === "") $image = "default.png";
                $data = [
                    'name'=> $name,
                    'username'=> $username,
                    'password'=> $password,
                    'email'=> $email,
                    'state'=> $state,
                    'image'=> $image
                ];
                
                
                InsertU::execute($data);
                
            }
        }
    }

    public function Update(int $id)
    {
        if(isset($_POST["btnupuser"])){
            if(isset($_POST['name']) && !empty($_POST['name'])
            && isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['password']) && !empty($_POST['password'])
            && isset($_POST['email']) && !empty($_POST['email'])){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $image = basename($_FILES["image"]["name"]);
                if($image === "") $image = GetByIdU::execute($id)['image'];
                $data = [
                    'name'=> $name,
                    'username'=> $username,
                    'password'=> $password,
                    'email'=> $email,
                    'image'=> $image,
                    'id'=> $id
                ];

                UpdateU::execute($data);    
            }
        }
    }

    public function Delete(int $id)
    {
       return DeleteU::execute($id);
    }

    public function GetAll()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $users = GetAllU::execute();
        
        require __DIR__."/../../views/Users.php";
    }

    public function Upform(int $id)
    {
        $this_user = GetByIdU::execute($id);
        require __DIR__."/../../views/updateuser.php";
    }
    public function Addform()
    {
        require __DIR__."/../../views/insertuser.php";
    }
    public function Manage()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $users = GetAllU::execute();
        require __DIR__."/../../Views/manageusers.php";
    }
    public function Setting(int $id)
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $user = GetByIdU::execute($id);
        require __DIR__."/../../Views/settings.php";
    }
    public function result_search()
    {
        $logo = Allsetting::execute("logo");
        $footer = Allsetting::execute("footer");

        $admin = GetByIdU::execute($_SESSION['admin_id']);

        if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

            $title = $_POST['searchbox'];
            $users = Usersearch::execute($title);

            require __DIR__."/../../Views/manageusers.php";

        }
        else{

        $users = GetAllU::execute();

        require __DIR__."/../../Views/manageusers.php";
        }
        
    }
    public function login()
    {
        require __DIR__."/../../views/sign-in.php";
    }
    public function login_result()
    {
        if (isset($_POST['btnlogin'])){
            if (isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['password']) && !empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                Login::execute($username, $password);
            }
        }
    }
    public function Upuser(int $id)
    {
        if (isset($_POST['btnupuser'])){
                if (isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['email']) && !empty($_POST['email'])){

                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];

                    $img = basename($_FILES["image"]["name"]);

                    if($img === "") $img = GetByIdU::execute($id)['image'];

                    $password = GetByIdU::execute($id)['password'];

                    $data = [
                        'name'=> $name,
                        'username'=> $username,
                        'password'=> $password,
                        'email'=> $email,
                        'image'=> $img,
                        'id'=> $id
                    ];
    
                    UpdateU::execute($data);
                }
        }
    }
    public function Delimg(int $id)
    {
        return Deleteimg::execute($id);
    }
}
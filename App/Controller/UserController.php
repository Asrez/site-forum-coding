<?php 

namespace App\Controller;

use flight;

use App\Actions\Users\GetAllU;
use App\Actions\Users\GetByIdU;
use App\Actions\Users\UpdateU;
use App\Actions\Users\InsertU;
use App\Actions\Users\DeleteU;

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
        $admin = GetByIdU::execute(1);
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
        $admin = GetByIdU::execute(1);
        $users = GetAllU::execute();
        require __DIR__."/../../Views/manageusers.php";
    }
    public function Setting(int $id)
    {
        $admin = GetByIdU::execute(1);
        $user = GetByIdU::execute($id);
        require __DIR__."/../../Views/settings.php";
    }
}
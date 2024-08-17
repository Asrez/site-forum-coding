<?php 

namespace App\Controller;

use flight;

use App\Actions\Users\GetByIdU;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\ConfirmP;
use App\Actions\Posts\GetByIdP;
use App\Actions\Posts\UpdateP;
use App\Actions\Posts\InsertP;
use App\Actions\Posts\DeleteP;
use App\Actions\Posts\Innerjoin;

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
        $posts = GetAllP::execute();
        $admin = GetByIdU::execute(1);

        require __DIR__."/../../views/Posts.php";
    }

    public function Manage()
    {
        $admin = GetByIdU::execute(1);
        $posts = GetAllP::execute();
        require __DIR__."/../../Views/managepost.php";
    }
    public function Gallery()
    {
        $admin = GetByIdU::execute(1);
        $posts = Innerjoin::execute();
        require __DIR__."/../../Views/gallery.php";
    }

    public function Upform(int $id)
    {
        $admin = GetByIdU::execute(1);
        $this_post = GetByIdP::execute($id);
        require __DIR__."/../../views/updatepost.php";
    }
    public function Confirmed(int $id)
    {
        ConfirmP::execute($id);
    }
}
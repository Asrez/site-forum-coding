<?php 

namespace App\Controller;

use flight;

use App\Actions\Users\GetByIdU;

use App\Actions\Posts\GetAllP;
use App\Actions\Posts\GetByIdP;
use App\Actions\Posts\UpdateP;
use App\Actions\Posts\InsertP;
use App\Actions\Posts\DeleteP;
use App\Actions\Posts\Innerjoin;

class PostController
{
    public function Insert()
    {

    }

    public function Update(int $id, array $data)
    {
        
    }

    public function Delete(int $id)
    {
        
    }

    public function GetAll()
    {
        $all_posts = GetAllP::execute();
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

    public function GetById(int $id)
    {
        
    }
}
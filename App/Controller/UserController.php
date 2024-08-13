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
    public function Insert(array $array)
    {
        flight::json(InsertU::execute($array));
    }

    public function Update(int $id, array $data)
    {
        flight::json(UpdateU::execute($id, $data));
    }

    public function Delete(int $id)
    {
        flight::json(DeleteU::execute($id));
    }

    public function GetAll()
    {
        $users = GetAllU::execute();
        
        require __DIR__."/../../views/Users.php";

    }

    public function GetById(int $id)
    {
        flight::json(GetByIdU::execute($id));
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
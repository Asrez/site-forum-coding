<?php 

namespace App\Controller;

use App\Actions\Comments\CountC;
use App\Actions\Posts\GetByAdminId;
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
                
                
                $result = InsertU::execute($data);

                if ($result === 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("insert user successed");
                        location.replace("/manage/user");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script type="text/javascript">
                        window.alert("change the username");
                        location.replace("/panel/inuser");
                    </script>
                    <?php
                }
                
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

                $result = UpdateU::execute($data);    

                if ($result === 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("update user successed");
                        location.replace("/manage/user");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script type="text/javascript">
                        window.alert("change the username");
                        location.replace("upuser/<?= $data['id'] ?>");
                    </script>
                    <?php
                }
            }
        }
    }

    public function updateaccont(int $id)
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

                $result = UpdateU::execute2($data);    
                if ($result === 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("your accont updated");
                        location.replace("/manage/profile");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script type="text/javascript">
                        window.alert("change the username");
                        location.replace("/manage/edit");
                    </script>
                    <?php
                }
            }
        }
    }
    public function Delete(int $id)
    {
        DeleteU::execute($id);
        ?>
        <script type="text/javascript">
            window.alert("delete user successed");
            location.replace("manage/user");
        </script>
        <?php
    }

    public function GetAll()
    {
        $tool = tools();

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $users = GetAllU::execute();
            
            Flight::render(__DIR__ ."/../../views/panel/users.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'users'=> $users ,
            'admin'=> $admin 
            ]);
        }
        else {
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        }
        
    }

    public function Upform(int $id)
    {
        $tool = tools();
        $this_user = GetByIdU::execute($id);

        Flight::render(__DIR__ ."/../../views/panel/updateuser.php",
        ['logo'=> $tool['logo'] , 
        'logo_footer'=> $tool['logo_footer'] ,
        'footer'=> $tool['footer'] ,
        'title'=> $tool['title'] ,
        'this_user'=> $this_user ,
        'id'=> $id
        ]);
    }
    public function Addform()
    {
        $tool = tools();

        Flight::render(__DIR__ ."/../../views/panel/insertuser.php",
        ['logo'=> $tool['logo'] , 
        'logo_footer'=> $tool['logo_footer'] ,
        'footer'=> $tool['footer'] ,
        'title'=> $tool['title'] ,
        ]);
    }
    public function Manage()
    {
        $tool = tools();

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);
            $users = GetAllU::execute();

            Flight::render(__DIR__ ."/../../Views/panel/manageusers.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'admin'=> $admin ,
            'users'=> $users ,
            ]);
        }
        else {
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        }
        
    }
    public function Setting(int $id)
    {
        $tool = tools();

        if (isset($_SESSION['admin_id'])){
            $admin = GetByIdU::execute($_SESSION['admin_id']);
            if($admin['state'] === 1) {
                $user = GetByIdU::execute($id);
                
                Flight::render(__DIR__ ."/../../Views/panel/settings.php",
                ['logo'=> $tool['logo'] , 
                'logo_footer'=> $tool['logo_footer'] ,
                'footer'=> $tool['footer'] ,
                'title'=> $tool['title'] ,
                'admin'=> $admin ,
                'user'=> $user ,
                'id'=> $id 
                ]);
            }
            else {
                Flight::render(__DIR__ ."/../../public/error-404.php");
            }
        }
        else {
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        }
        
    }
    public function result_search()
    {
        $tool = tools();

        if (isset($_SESSION['admin_id'])){       

            $admin = GetByIdU::execute($_SESSION['admin_id']);

            if (isset($_POST['searchbox']) && ! empty($_POST['searchbox'])){

                $title = $_POST['searchbox'];
                $users = Usersearch::execute($title);

                Flight::render(__DIR__ ."/../../Views/panel/manageusers.php",
                ['logo'=> $tool['logo'] , 
                'logo_footer'=> $tool['logo_footer'] ,
                'footer'=> $tool['footer'] ,
                'title'=> $tool['title'] ,
                'admin'=> $admin ,
                'users'=> $users
                ]);

            }
            else{

                $users = GetAllU::execute();

                Flight::render(__DIR__ ."/../../Views/panel/manageusers.php",
                ['logo'=> $tool['logo'] , 
                'logo_footer'=> $tool['logo_footer'] ,
                'footer'=> $tool['footer'] ,
                'title'=> $tool['title'] ,
                'admin'=> $admin ,
                'users'=> $users
                ]);
            }
        }
        else {
            return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
        }
        
    }
    public function login()
    {
        $tool = tools();
        return sign_in($tool['logo'], $tool['logo_footer'], $tool['footer'], $tool['title']);
    }
    public function login_result()
    {
        if (isset($_POST['btnlogin'])){
            if (isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['password']) && !empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = Login::execute($username, $password);
                if ($result === 1){
                    ?>
                    <script type="text/javascript">
                        window.alert("welcome");
                        location.replace("/panel");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script type="text/javascript">
                        window.alert("The information is incorrect");
                        location.replace("/");
                    </script>
                    <?php
                }
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
    
                    $result = UpdateU::execute($data);
                    if ($result === 1) {
                        ?>
                        <script type="text/javascript">
                            window.alert("your accont updated");
                            location.replace("/manage/profile");
                        </script>
                        <?php
                    }
                    else {
                        ?>
                        <script type="text/javascript">
                            window.alert("change the username");
                            location.replace("/manage/edit");
                        </script>
                        <?php
                    }
                }
        }
    }
    public function Delimg(int $id)
    {
        Deleteimg::execute($id);
        ?>
            <script type="text/javascript">
                window.alert("your image deleted");
                location.replace("/usetting/<?= $id ?>");
            </script>
        <?php
    }

    public function log_in_result()
    {
        if (!(isset($_SESSION['admin_id']))){
            if (isset($_POST['btnlogin'])) {
                if (isset($_POST['username']) && !empty($_POST['username'])
                && isset($_POST['password']) && !empty($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $result = Login::execute2($username, $password);
                    if ($result === 1){
                        ?>
                        <script type="text/javascript">
                            window.alert("welcome");
                            location.replace("/");
                        </script>
                        <?php
                    }
                    else {
                        ?>
                        <script type="text/javascript">
                            window.alert("The information is incorrect");
                            location.replace("/");
                        </script>
                        <?php
                    }

                }
            }
        }
    }

    public function sign_up()
    {
        if(isset($_POST["btnsignup"])){
            if(isset($_POST['name']) && !empty($_POST['name'])
            && isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['password']) && !empty($_POST['password'])
            && isset($_POST['email']) && !empty($_POST['email'])){
                $name = $_POST['name'];
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
                    'image'=> $image
                ];
                
                
                $result = InsertU::execute2($data);

                if ($result === 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("regestration is done");
                        location.replace("/");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script type="text/javascript">
                        window.alert("change the username");
                        location.replace("/");
                    </script>
                    <?php
                }
                
            }
        }
    }
    public function profile()
    {
       if (isset($_SESSION['admin_id'])) {
            $tool = tools();
            $questions = GetByAdminId::execute($_SESSION['admin_id']);
            $count_activity = count($questions);
            $count_reply = CountC::execute($_SESSION['admin_id'])['count'];
            $user = GetByIdU::execute($_SESSION['admin_id']);

            Flight::render(__DIR__ ."/../../Views/my_profile.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'twitter'=> $tool['twitter'] ,
            'github'=> $tool['github'] ,
            'youtube'=> $tool['youtube'] ,
            'questions'=> $questions ,
            'count_activity'=> $count_activity ,
            'count_reply'=> $count_reply ,
            'user'=> $user 
            ]);
       }
       else{
            Flight::render(__DIR__ ."/../../public/error-404.php");
       }
    }
    public function edit()
    {
       if (isset($_SESSION['admin_id'])) {
            $tool = tools();
            $user = GetByIdU::execute($_SESSION['admin_id']);

            Flight::render(__DIR__ ."/../../Views/edit_profile_account.php",
            ['logo'=> $tool['logo'] , 
            'logo_footer'=> $tool['logo_footer'] ,
            'footer'=> $tool['footer'] ,
            'title'=> $tool['title'] ,
            'twitter'=> $tool['twitter'] ,
            'github'=> $tool['github'] ,
            'youtube'=> $tool['youtube'] ,
            'user'=> $user 
            ]);

       }
       else{
            Flight::render(__DIR__ ."/../../public/error-404.php");
       }
    }
    
}
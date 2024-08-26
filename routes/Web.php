<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

Flight::route("GET /" ,[new IndexController(),"Main_index"]);
Flight::route("GET /Main" ,[new IndexController(),"Main_index"]);
Flight::route("GET /Main2" ,[new IndexController(),"Main_index2"]);
Flight::route("GET /search" ,[new IndexController(),"search_result_main"]);
Flight::route("GET /logout2" ,[new IndexController(),"logout2"]);
Flight::route("GET /panel" ,[new IndexController(),"index"]);
Flight::route("GET /panel/Main" ,[new IndexController(),"index"]);
Flight::route("GET /site_setting" ,[new IndexController(),"site_setting"]);
Flight::route("GET /go_setting/@id" ,[new IndexController(),"go_setting"]);
Flight::route("POST /setting_update/@id" ,[new IndexController(),"setting_update"]);
Flight::route("POST /searchall" ,[new IndexController(),"result_search"]);
Flight::route("GET /logout" ,[new IndexController(),"logout"]);
Flight::route("GET /sitemap" ,[new IndexController(),"site_map"]);

Flight::route("POST /log_in_main_result" ,[new UserController(),"log_in_result"]);
Flight::route("POST /sign_up_main_result" ,[new UserController(),"sign_up"]);
Flight::route("GET /profile" ,[new UserController(),"profile"]);
Flight::route("GET /edit" ,[new UserController(),"edit"]);
Flight::route("POST /updateaccont/@id" ,[new UserController(),"updateaccont"]);
Flight::route("POST /searchuser" ,[new UserController(),"result_search"]);
Flight::route("GET /login" ,[new UserController(),"login"]);
Flight::route("POST /login_result" ,[new UserController(),"login_result"]);
Flight::route("POST /updateuser/@id" ,[new UserController(),"Upuser"]);
Flight::route("GET /deleteimg/@id" ,[new UserController(),"Delimg"]);
Flight::route("GET /users" ,[new UserController(),"GetAll"]);
Flight::route("GET /manageuser" ,[new UserController(),"Manage"]);
Flight::route("GET /setting/@id" ,[new UserController(),"Setting"]);
Flight::route("POST /inuser" ,[new UserController(),"Insert"]);
Flight::route("GET /deluser/@id" ,[new UserController(),"Delete"]);
Flight::route("GET /upuser/@id" ,[new UserController(),"Upform"]);
Flight::route("POST /upusers/@id" ,[new UserController(),"Update"]);
Flight::route("GET /inuser" ,[new UserController(),"Addform"]);

flight::group('/posts',function()
{
    Flight::route("GET /" ,[new PostController(),"GetAll"]);
    Flight::route("GET /@id" ,[new PostController(),"GetById"]);
});

Flight::route("GET /managepost" ,[new PostController(),"Manage"]);
Flight::route("GET /gallery" ,[new PostController(),"Gallery"]);
Flight::route("POST /inpost" ,[new PostController(),"Insert"]);
Flight::route("GET /delpost/@id" ,[new PostController(),"Delete"]);
Flight::route("GET /uppost/@id" ,[new PostController(),"Upform"]);
Flight::route("POST /uppost/@id" ,[new PostController(),"Update"]);
Flight::route("GET /confirmpost/@id" ,[new PostController(),"Confirmed"]);
Flight::route("POST /searchpost" ,[new PostController(),"result_search"]);
Flight::route("POST /addquestion" ,[new PostController(),"add_question"]);
Flight::route("GET /show_post/@id" ,[new PostController(),"show_post"]);
Flight::route("POST /addreply/@id" ,[new PostController(),"add_reply"]);
Flight::route("GET /Del_reply/@id" ,[new PostController(),"Del_reply"]);




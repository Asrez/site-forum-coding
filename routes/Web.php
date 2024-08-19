<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

//index panel page

Flight::route("GET /" ,[new IndexController(),"Main_index"]);
Flight::route("GET /i" ,[new IndexController(),"Main_index2"]);
Flight::route("GET /Main" ,[new IndexController(),"Main_index"]);
Flight::route("GET /Main2" ,[new IndexController(),"Main_index2"]);
Flight::route("POST /search" ,[new IndexController(),"search_result_main"]);




//index panel page

Flight::route("GET /panel" ,[new IndexController(),"index"]);
Flight::route("GET /panel/Main" ,[new IndexController(),"index"]);

//users
Flight::route("GET /users" ,[new UserController(),"GetAll"]);
Flight::route("GET /manageusers" ,[new UserController(),"Manage"]);
Flight::route("GET /setting/@id" ,[new UserController(),"Setting"]);
Flight::route("POST /inuser" ,[new UserController(),"Insert"]);
Flight::route("GET /deluser/@id" ,[new UserController(),"Delete"]);
Flight::route("GET /upuser/@id" ,[new UserController(),"Upform"]);
Flight::route("POST /upuser/@id" ,[new UserController(),"Update"]);
Flight::route("GET /inuser" ,[new UserController(),"Addform"]);

//posts
Flight::route("GET /posts" ,[new PostController(),"GetAll"]);
Flight::route("GET /post/@id" ,[new PostController(),"GetById"]);
Flight::route("GET /manageposts" ,[new PostController(),"Manage"]);
Flight::route("GET /gallery" ,[new PostController(),"Gallery"]);
Flight::route("POST /inpost" ,[new PostController(),"Insert"]);
Flight::route("GET /delpost/@id" ,[new PostController(),"Delete"]);
Flight::route("GET /uppost/@id" ,[new PostController(),"Upform"]);
Flight::route("POST /uppost/@id" ,[new PostController(),"Update"]);
Flight::route("GET /confirmpost/@id" ,[new PostController(),"Confirmed"]);

//search
Flight::route("POST /searchall" ,[new IndexController(),"result_search"]);
Flight::route("POST /searchpost" ,[new PostController(),"result_search"]);
Flight::route("POST /searchuser" ,[new UserController(),"result_search"]);

//login
Flight::route("GET /login" ,[new UserController(),"login"]);
Flight::route("POST /login_result" ,[new UserController(),"login_result"]);

//setting accont
Flight::route("POST /updateuser/@id" ,[new UserController(),"Upuser"]);
Flight::route("GET /deleteimg/@id" ,[new UserController(),"Delimg"]);
Flight::route("GET /logout" ,[new IndexController(),"logout"]);
// Flight::route("GET /signup" ,[new UserController(),"Addform"]);

Flight::route("GET /sign_up" ,[new UserController(),"sign_up"]);
Flight::route("GET /log_in" ,[new UserController(),"log_in"]);
Flight::route("POST /log_in_main_result" ,[new UserController(),"log_in_result"]);
Flight::route("POST /sign_up_main_result" ,[new UserController(),"sign_up_result"]);

Flight::route("POST /addquestion" ,[new PostController(),"add_question"]);







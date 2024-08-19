<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

//index page

Flight::route("GET /" ,[new IndexController(),"index"]);
Flight::route("GET /Main" ,[new IndexController(),"index"]);

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






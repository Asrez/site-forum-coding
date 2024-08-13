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
Flight::route("GET /deleteuser1/@id" ,[new UserController(),"Setting"]);


//posts
Flight::route("GET /posts" ,[new PostController(),"GetAll"]);
Flight::route("GET /manageposts" ,[new PostController(),"Manage"]);
Flight::route("GET /gallery" ,[new PostController(),"Gallery"]);




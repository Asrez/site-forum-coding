<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

//index page

Flight::route("GET /" ,[new IndexController(),"index"]);
Flight::route("GET /Main" ,[new IndexController(),"index"]);


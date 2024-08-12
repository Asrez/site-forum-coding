<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

use flight;

//index page

flight::route("Get /" ,[new IndexController(),"index"]);
flight::route("Get /Main" ,[new IndexController(),"index"]);


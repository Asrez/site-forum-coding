<?php

use App\Controller\IndexController;
use App\Controller\PostController;
use App\Controller\UserController;

Flight::route("GET /sitemap", [new IndexController(), "site_map"]);

Flight::route("GET /", [new IndexController(), "Main_index"]);
Flight::route("GET /search", [new IndexController(), "search_result_main"]);

Flight::route("POST /log_in_main_result", [new UserController(), "log_in_result"]);
Flight::route("POST /sign_up_main_result", [new UserController(), "sign_up"]);
Flight::route("GET /login", [new UserController(), "login"]);
Flight::route("POST /login_result", [new UserController(), "login_result"]);
Flight::route("GET /setting/@id", [new UserController(), "Setting"]);



flight::group('/posts', function () {
    Flight::route("GET /", [new PostController(), "GetAll"]);
    Flight::route("GET /@id", [new PostController(), "GetById"]);
});

flight::group('/main', function () {
    Flight::route("GET /main", [new IndexController(), "Main_index"]);
    Flight::route("GET /main2", [new IndexController(), "Main_index2"]);
    Flight::route("POST /addquestion", [new PostController(), "add_question"]);
    Flight::route("GET /show_post/@id", [new PostController(), "conversation"]);
    Flight::route("POST /addreply/@id", [new PostController(), "add_reply"]);
    Flight::route("GET /Del_reply/@id", [new PostController(), "Del_reply"]);
    Flight::route("GET /logout", [new IndexController(), "logout"]);
    Flight::route("POST /updateaccont/@id", [new UserController(), "updateaccont"]);

});


flight::group('/manage', function () {
    flight::group('/post', function () {
        Flight::route("GET /", [new PostController(), "panel_manage_posts"]);
        Flight::route("POST /inpost", [new PostController(), "Insert"]);
        Flight::route("GET /delpost/@id", [new PostController(), "Delete"]);
        Flight::route("GET /uppost/@id", [new PostController(), "Upform"]);
        Flight::route("POST /uppost/@id", [new PostController(), "Update"]);
        Flight::route("GET /confirmpost/@id", [new PostController(), "Confirmed"]);
    });

    Flight::route("GET /user", [new UserController(), "Manage_user"]);
    Flight::route("GET /site_setting", [new IndexController(), "manage_setting"]);
    Flight::route("GET /profile", [new UserController(), "profile"]);
    Flight::route("GET /edit", [new UserController(), "edit_profile"]);

});

flight::group('/panel', function () {
    Flight::route("GET /", [new IndexController(), "index"]);
    Flight::route("GET /gallery", [new PostController(), "Gallery"]);
    Flight::route("GET /users", [new UserController(), "panel_users"]);
    Flight::route("GET /posts", [new PostController(), "GetAll"]);
    Flight::route("GET /logout", [new IndexController(), "logout"]);
    Flight::route("POST /searchall", [new IndexController(), "result_search"]);
    Flight::route("POST /searchpost", [new PostController(), "result_search"]);
    Flight::route("POST /searchuser", [new UserController(), "result_search"]);
    Flight::route("POST /inuser", [new UserController(), "Insert"]);
    Flight::route("GET /inuser", [new UserController(), "Addform_users"]);
    Flight::route("GET /go_setting/@id", [new IndexController(), "go_setting"]);
    Flight::route("POST /upusers/@id", [new UserController(), "Update"]);
    Flight::route("GET /deleteimg/@id", [new UserController(), "Delimg"]);
    Flight::route("POST /setting_update/@id", [new IndexController(), "setting_update"]);
    Flight::route("GET /deluser/@id", [new UserController(), "Delete"]);
    Flight::route("GET /upuser/@id", [new UserController(), "Upform_users"]);
    Flight::route("POST /updateuser/@id", [new UserController(), "Upuser"]);
});


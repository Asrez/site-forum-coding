<?php
use App\Controller\UserController;
use App\Controller\PostController;
use App\Controller\IndexController;

Flight::route("GET /sitemap", [new IndexController(), "site_map"]);

Flight::route("GET /", [new IndexController(), "main_index"]);
Flight::route("GET /question/@id", [new PostController(), "conversation"]);
Flight::route("GET /search", [new IndexController(), "search_result_main"]);

Flight::route("POST /log_in_main_result", [new UserController(), "log_in_result"]);
Flight::route("POST /sign_up_main_result", [new UserController(), "sign_up"]);
Flight::route("GET /login", [new UserController(), "login"]);
Flight::route("POST /login_result", [new UserController(), "login_result"]);
Flight::route("GET /setting/@id", [new UserController(), "setting"]);

Flight::group('/posts', function () {
    Flight::route("GET /", [new PostController(), "getAll"]);
    Flight::route("GET /@id", [new PostController(), "getById"]);
});

Flight::group('/main', function () {
    Flight::route("GET /", [new IndexController(), "main_index2"]);
    Flight::route("POST /addquestion", [new PostController(), "add_question"]);
    Flight::route("POST /addreply/@id", [new PostController(), "add_reply"]);
    Flight::route("GET /logout", [new IndexController(), "logout"]);
    Flight::route("POST /updateaccont/@id", [new UserController(), "updateaccont"]);

});


Flight::group('/manage', function () {
    Flight::group('/post', function () {
        Flight::route("GET /", [new PostController(), "panel_manage_posts"]);
        Flight::route("POST /inpost", [new PostController(), "insert"]);
        Flight::route("GET /delpost/@id", [new PostController(), "delete"]);
        Flight::route("GET /uppost/@id", [new PostController(), "upform"]);
        Flight::route("POST /uppost/@id", [new PostController(), "update"]);
        Flight::route("GET /confirmpost/@id", [new PostController(), "confirmed"]);
    });

    Flight::route("GET /user", [new UserController(), "manage_user"]);
    Flight::route("GET /site_setting", [new IndexController(), "manage_setting"]);
    Flight::route("GET /profile", [new UserController(), "profile"]);
    Flight::route("GET /edit", [new UserController(), "edit_profile"]);

});

Flight::group('/panel', function () {
    Flight::route("GET /", [new IndexController(), "index"]);
    Flight::route("GET /users", [new UserController(), "panel_users"]);
    Flight::route("GET /posts", [new PostController(), "getAll"]);
    Flight::route("GET /logout", [new IndexController(), "logout"]);
    Flight::route("POST /searchall", [new IndexController(), "result_search"]);
    Flight::route("POST /searchpost", [new PostController(), "result_search"]);
    Flight::route("POST /searchuser", [new UserController(), "result_search"]);
    Flight::route("POST /inuser", [new UserController(), "insert"]);
    Flight::route("GET /inuser", [new UserController(), "addform_users"]);
    Flight::route("GET /go_setting/@id", [new IndexController(), "go_setting"]);
    Flight::route("POST /upusers/@id", [new UserController(), "update"]);
    Flight::route("GET /deleteimg/@id", [new UserController(), "delimg"]);
    Flight::route("POST /setting_update/@id", [new IndexController(), "setting_update"]);
    Flight::route("GET /deluser/@id", [new UserController(), "delete"]);
    Flight::route("GET /upuser/@id", [new UserController(), "upform_users"]);
    Flight::route("POST /updateuser/@id", [new UserController(), "upuser"]);
});


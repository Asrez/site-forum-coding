<?php
use App\Controller\UserController;
use App\Controller\PostController;
use App\Controller\IndexController;

Flight::route("GET /sitemap", [new IndexController(), "site_map"]);
Flight::route("GET /", [new IndexController(), "main_index"]);
Flight::route("GET /question/@id", [new PostController(), "conversation"]);
Flight::route("GET /search", [new IndexController(), "search_result_main"]);
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
    Flight::route("POST /login_main", [new UserController(), "log_in_result"]);
    Flight::route("POST /signup_main", [new UserController(), "sign_up"]);
});


Flight::group('/manage', function () {
    Flight::group('/post', function () {
        Flight::route("GET /", [new PostController(), "panel_manage_posts"]);
        Flight::route("POST /creat", [new PostController(), "insert"]);
        Flight::route("GET /delete/@id", [new PostController(), "delete"]);
        Flight::route("GET /update/@id", [new PostController(), "upform"]);
        Flight::route("POST /update/@id", [new PostController(), "update"]);
        Flight::route("GET /confirm/@id", [new PostController(), "confirmed"]);
    });

    Flight::route("GET /user", [new UserController(), "manage_user"]);
    Flight::route("GET /site_setting", [new IndexController(), "manage_setting"]);
    Flight::route("GET /profile", [new UserController(), "profile"]);
    Flight::route("GET /edit", [new UserController(), "edit_profile"]);

});

Flight::group('/panel', function () {
    Flight::group('/users', function () {
        Flight::route("GET /", [new UserController(), "panel_users"]);
        Flight::route("POST /search", [new UserController(), "result_search"]);
        Flight::route("POST /creat", [new UserController(), "insert"]);
        Flight::route("GET /creat", [new UserController(), "addform_users"]);
        Flight::route("POST /update2/@id", [new UserController(), "update"]);
        Flight::route("GET /deleteimg/@id", [new UserController(), "delimg"]);
        Flight::route("GET /delete/@id", [new UserController(), "delete"]);
        Flight::route("GET /update/@id", [new UserController(), "upform_users"]);
        Flight::route("POST /update/@id", [new UserController(), "upuser"]);
    });

    Flight::route("GET /", [new IndexController(), "index"]);
    Flight::route("GET /posts", [new PostController(), "getAll"]);
    Flight::route("GET /logout", [new IndexController(), "logout"]);
    Flight::route("POST /searchall", [new IndexController(), "result_search"]);
    Flight::route("POST /searchpost", [new PostController(), "result_search"]);
    Flight::route("GET /go_setting/@id", [new IndexController(), "go_setting"]);
    Flight::route("POST /setting_update/@id", [new IndexController(), "setting_update"]);
});


<?php
use App\Actions\Setting\Allsetting;
use App\Actions\Posts\GetAllP;
use App\Actions\Posts\CountP;
use App\Actions\Posts\Chart;
use App\Actions\Setting\Advers;
use App\Actions\Users\GetAllU;
use App\Actions\Users\CountU;
use App\Actions\Users\GetByIdU;
use App\Actions\Views\CountV;
use App\Actions\Search\SearchAll;
use App\Actions\Comments\CountC;
use App\Actions\Posts\GetByAdminId;
use App\Actions\Setting\Settings;

function directory_separator(string $file_name, string $folder = null)
{
    if ($folder === null) {
        $path = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR.$file_name;
    }
    else {
        $path = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$file_name;
    }
    
    return $path;
}

function error()
{
    Flight::render(directory_separator("error-404.php"));
}

function sign_in(array $logo, array $logo_footer, array $footer, array $title)
{
    Flight::render(
        directory_separator("sign-in.php","panel"),
        [
            'logo' => $logo,
            'logo_footer' => $logo_footer,
            'footer' => $footer,
            'title' => $title
        ]
    );
}

function tools()
{

    $logo = Allsetting::execute("logo");
    $logo_footer = Allsetting::execute("logo_footer");
    $footer = Allsetting::execute("footer");
    $title = Allsetting::execute("title");
    $twitter = Allsetting::execute("twitter");
    $github = Allsetting::execute("github");
    $youtube = Allsetting::execute("youtube");
    $advers = Advers::execute();
    $questions = GetAllP::execute2();
    $countadmin = CountU::execute2()['count'];
    $countview = CountV::execute()['count'];
    $countpost = CountP::execute()['count'];
    $countuser = CountU::execute()['count'];
    $posts = GetAllP::execute();
    $users = GetAllU::execute();
    $settings = Settings::execute();
    return [
        "logo" => $logo,
        "logo_footer" => $logo_footer,
        "footer" => $footer,
        "title" => $title,
        "twitter" => $twitter,
        "github" => $github,
        "youtube" => $youtube,
        "advers" => $advers,
        "questions" => $questions,
        "countadmin" => $countadmin,
        "countview" => $countview,
        "countpost" => $countpost,
        "countuser" => $countuser,
        "posts" => $posts,
        "users" => $users,
        "settings" => $settings
    ];
}

function session_admin()
{
    if (isset($_SESSION['admin_id'])) {

        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $state = true;

        if ($admin['state'] === 0)
            $state = false;
    } else
        $state = false;

    if ($state === false)
        return false;
    else
        return $admin;
}

function session_admin2()
{
    if (isset($_SESSION['admin_id'])) {

        $admin = GetByIdU::execute($_SESSION['admin_id']);
        $state = true;
    } else
        $state = false;

    if ($state === false)
        return false;
    else
        return $admin;
}

function index_main(array $tool)
{
    Flight::render(
        directory_separator("index.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'advers' => $tool['advers'],
            'questions' => $tool['questions']
        ]
    );
}

function index_main2()
{
    $tool = tools();

    Flight::render(
        directory_separator("index2.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'advers' => $tool['advers'],
            'questions' => $tool['questions']
        ]
    );
}

function search_result_main(array $tool)
{

    Flight::render(
        directory_separator("index.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'advers' => $tool['advers'],
            'questions' => $tool['questions']
        ]
    );
}

function index(array $tool, array $admin)
{
    $chart = Chart::execute();

    foreach ($chart as $ch) {
        $chart_viewcount[] = $ch['viewcount'];
        $chart_title[] = $ch['title'];
    }

    Flight::render(
        directory_separator("index.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'admin' => $admin,
            'countadmin' => $tool['countadmin'],
            'countview' => $tool['countview'],
            'countpost' => $tool['countpost'],
            'countuser' => $tool['countuser'],
            'posts' => $tool['posts'],
            'users' => $tool['users'],
            'chart_viewcount' => $chart_viewcount,
            'chart_title' => $chart_title
        ]
    );
}

function manage_setting(array $tool, array $admin)
{
    Flight::render(
        directory_separator("managesetting.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'advers' => $tool['advers'],
            'questions' => $tool['questions'],
            'settings' => $tool['settings'],
            'admin' => $admin
        ]
    );
}

function setting_update(array $tool, array $admin, array $setting, int $id)
{
    Flight::render(
        directory_separator("settingupdate.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'setting' => $setting,
            'admin' => $admin,
            'id' => $id
        ]
    );
}

function result_search(array $tool, array $admin, string $titlee)
{
    $all = SearchAll::execute($titlee);
    $posts = $all['posts'];
    $users = $all['users'];

    Flight::render(
        directory_separator("search-results.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'users' => $users,
            'posts' => $posts,
            'admin' => $admin
        ]
    );
}

function GetAll(array $tool, array $admin)
{
    Flight::render(
        directory_separator("posts.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'posts' => $tool['posts'],
            'admin' => $admin
        ]
    );
}

function Site_map()
{
    Flight::render(directory_separator("sitemap.php"));
}

function panel_manage_posts(array $tool, array $admin)
{
    Flight::render(
        directory_separator("managepost.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'posts' => $tool['posts'],
            'admin' => $admin
        ]
    );
}

function Gallery(array $tool, array $admin)
{
    Flight::render(
        directory_separator("gallery.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'posts' => $tool['posts'],
            'admin' => $admin
        ]
    );
}

function Upform(array $tool, array $admin, array $this_post, int $id)
{
    Flight::render(
        directory_separator("updatepost.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'this_post' => $this_post,
            'admin' => $admin,
            'id' => $id
        ]
    );
}

function post_GetById(array $tool, array $admin, array $post, int $id)
{
    Flight::render(
        directory_separator("post.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'post' => $post,
            'admin' => $admin,
            'id' => $id
        ]
    );
}

function conversation(array $tool, array $user, array $post, array $answers, int $reply_post_id, int $id)
{
    Flight::render(
        directory_separator("conversation.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'post' => $post,
            'user' => $user,
            'reply_post_id' => $reply_post_id,
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'answers' => $answers,
            'id' => $id
        ]
    );
}

function panel_users(array $tool, array $admin)
{
    Flight::render(
        directory_separator("users.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'users' => $tool['users'],
            'admin' => $admin
        ]
    );
}

function Upform_users(array $tool, array $admin, array $this_user, int $id)
{
    Flight::render(
        directory_separator("updateuser.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'this_user' => $this_user,
            'id' => $id
        ]
    );
}

function Addform_users(array $tool)
{
    Flight::render(
        directory_separator("insertuser.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
        ]
    );
}

function Manage_user(array $tool, array $admin)
{
    Flight::render(
        directory_separator("manageusers.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'admin' => $admin,
            'users' => $tool['users'],
        ]
    );
}

function Setting(array $tool, array $admin, array $user, int $id)
{
    Flight::render(
        directory_separator("settings.php", "panel"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'admin' => $admin,
            'user' => $user,
            'id' => $id
        ]
    );
}

function profile()
{
    $tool = tools();
    $questions = GetByAdminId::execute($_SESSION['admin_id']);
    $count_activity = count($questions);
    $count_reply = CountC::execute($_SESSION['admin_id'])['count'];
    $user = GetByIdU::execute($_SESSION['admin_id']);

    Flight::render(
        directory_separator("my_profile.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'questions' => $questions,
            'count_activity' => $count_activity,
            'count_reply' => $count_reply,
            'user' => $user
        ]
    );
}

function edit_profile($tool)
{
    $user = GetByIdU::execute($_SESSION['admin_id']);

    Flight::render(
        directory_separator("edit_profile_account.php"),
        [
            'logo' => $tool['logo'],
            'logo_footer' => $tool['logo_footer'],
            'footer' => $tool['footer'],
            'title' => $tool['title'],
            'twitter' => $tool['twitter'],
            'github' => $tool['github'],
            'youtube' => $tool['youtube'],
            'user' => $user
        ]
    );
}
<?php
use App\Actions\Setting\Allsetting;

function error()
{
    Flight::render(__DIR__ ."/../../public/error-404.php");
}

function sign_in(array $logo, array $logo_footer, array $footer, array $title)
{
    Flight::render(__DIR__ ."/../../Views/panel/sign-in.php",
    ['logo'=> $logo , 
    'logo_footer'=> $logo_footer,
    'footer'=> $footer ,
    'title'=> $title 
    ]);
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
    return ["logo" => $logo , "logo_footer" => $logo_footer , "footer" => $footer , "title" => $title , "twitter" => $twitter , "github" => $github , "youtube" => $youtube];
}
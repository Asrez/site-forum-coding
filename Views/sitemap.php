<?php

use PDO;
use App\Database\Database;

$db = Database::getInstance()->getConnection();


header("Content-type: text/xml");

$text1 = '<?xml version="1.0" encoding="UTF-8"?>' . '<urlset xmlns="site/public/sitemap.xml">';
$text1 .= "\n";
file_put_contents("sitemap.xml", $text1);

$sql = "SELECT * FROM `questions`";


$stmt = $db->prepare($sql);
$stmt->execute();
$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

$name = name();
$base_url = $name.'/main/show_post/';

foreach ($stmt as $song) {
    $url = $base_url.$song["id"];
    $text1 .= '<url>';
    $text1 .= "<loc>{$url}</loc>";
    $text1 .= '</url>';
    $text1 .= "\n";
}

file_put_contents("sitemap.xml", $text1,FILE_APPEND);


file_put_contents("sitemap.xml", "</urlset>", FILE_APPEND);

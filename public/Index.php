
<?php

session_start();

require_once __DIR__."/../vendor/autoload.php";

require_once __DIR__."/../routes/Api.php";

require_once __DIR__."/../routes/Web.php";

Flight::start();
?>


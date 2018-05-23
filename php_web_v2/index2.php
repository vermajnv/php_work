<?php

require("./routes.php");
require("./controllers/testController.php");
require("./controllers/college_controller.php");
require("./controllers/course_controller.php");
require("./lib/util.php");
require("./controllers/HomeController.php");
require("./controllers/login_controller.php");
require("./controllers/LogOutController.php");
$url = $_GET["route"];
if ($url === "") {
    $url = "base";
}
$mappedString = $routes["$url"];
if ($mappedString === NULL) {
    require("./views/not_found.php");
    die();
}

// Tracking request
session_start();
//echo session_id();
// login authentication
print_r($_SESSION);
$username = $_SESSION["USER_NAME"];
if ($username === null) {
    $loginController = new LoginController();
    $validUser = $loginController->authenticate();
    if (!$validUser) {
	require("./views/login_failed.php");
	die();
    } else {
	$_SESSION["USER_NAME"] = $validUser;
    }
}


//echo $url;echo $className."</br>";
//echo $methodName;
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
// We will break the Mapped url in tokens
// First part will be the class name 
// second will be the method

$parts = explode("/", $mappedString);
$className = $parts[0];
$methodName = $parts[1];
//echo $className."</br>";
//echo $methodName;
$ctrlObj = new $className();
$ctrlObj->{$methodName}();

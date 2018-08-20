<?php

require("./routes.php");
require("./controllers/test/testController.php");
require("./controllers/college/CollegeController.php");
require("./controllers/home/HomeController.php");
require("./controllers/login/LoginController.php");
require("./controllers/logout/LogoutController.php");
require("./lib/util.php");

//print_r($_SERVER[REQUEST_URI]);
$url = $_GET["route"];
//print_r($url);
// For home page
if ($url === "") {
    $url = "base";
}
$mappedString = $routes["$url"];
// If url is not found
if ($mappedString === null) {
    require("./views/notFound.php");
    die();
}

// enabling Tracking
session_start();
$username = $_SESSION["USER_NAME"];

if ($username === null) {
    $loginController = new LoginController();
    $isValidUser = $loginController->authenticate();

    if (!$isValidUser) {
        require("./views/notAuthorized.php");
        die();
    } else {
        $_SESSION["USER_NAME"] = $isValidUser;
    }
}

$parts = explode("/", $mappedString);
$className = $parts[0];
$methodName = $parts[1];
$ctrlClass = new $className();
$ctrlClass->{$methodName}();


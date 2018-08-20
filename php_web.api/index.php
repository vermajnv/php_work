<?php

list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
require("./controllers/login/LoginController.php");
require("./controllers/college/CollegeController.php");
require("./controllers/course/courseController.php");
//phpinfo();

$loginController = new LoginController();
$isValidUser = $loginController->authenticate();
if (!$isValidUser) {
    echo json_encode(array("Status" => "Failure"));
    die();
}
$resourseString = $_GET["resourseString"];
list($className, $paramString) = explode("?", $resourseString);
list($_, $params) = explode("=", $paramString);
$paramArr = explode("/", $params);
//print_r($paramArr);
$methodName = $_SERVER["REQUEST_METHOD"];

$ctrlClass = new $className();
call_user_func_array(array($ctrlClass, $methodName), $paramArr);

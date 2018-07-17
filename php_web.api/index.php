<?php
require("./controllers/college_controller.php");
require("./controllers/login_controller.php");
$resourceString = $_GET["resourceString"];
list($className, $paramsString) = explode("?", $resourceString);
//echo $className. " ".$paramsString;
$loginController = new LoginController();
$isValidUser = $loginController->authenticate();
if(!$isValidUser) {
    echo json_encode(array("status" => "failure"));
    die();
}
else {
    echo "success";
}
list($_, $params) = explode("=", $paramsString);
//echo "<pre>";
//print_r($params);
//echo "</pre>";

$paramsArray = explode("/", $params);
echo "<pre>";
print_r($paramsArray);
echo "</pre>";

$method = $_SERVER["REQUEST_METHOD"];
$ctrlObj = new $className();
call_user_func_array(array($ctrlObj, $method), $paramsArray);
<?php

//require("./models/college/collegeModel.php");
require("./routes/routes.php");
//require("./controllers/college/collegeController.php");
//require("./controllers/home/homeController.php");
//require("./controllers/login/loginController.php");
//require("./controllers/logout/logoutController.php");
//require("./controllers/public/publicController.php");
require("./lib/util.php");

require("./vendor/autoload.php");

class FrontController {

    const LOGIN_KEY = "LOGIN_KEY";

    public function processRoute() {
        global $routes;
        $url = $_GET['route'];
        $resourceRoute = $this->getRoute($url, $routes);
        if (!$resourceRoute) {
            require("./views/not_Found.php");
            die();
        }

        $loggedInUser = $this->loggedInUser();
        $isPublicRoute = $this->isPublicRoute($resourceRoute);

        if (!$isPublicRoute && !$loggedInUser) {
            $validUser = $this->authenticateRequest();

            if (!$validUser) {
                $qString = $_SERVER['QUERY_STRING'];
                $queryString = str_replace("route=", "", $qString);
                require("./views/not_authorized.php");
                echo "username or password is invalid";
                die();
            }
            $this->updateLoggedInUser($validUser);
        }

        $this->executeRoute($resourceRoute);
    }

    private function getRoute($url, $routes) {
        return ($url === "") ? $routes["base"] : $routes[$url];
    }

    private function loggedInUser() {
        session_start();
        return isset($_SESSION[self::LOGIN_KEY]) ? true : false;
    }

    private function updateLoggedInUser($validUser) {
        $_SESSION[self::LOGIN_KEY] = $validUser;
    }

    private function authenticateRequest() {
        $loginController = new LoginController();
        return $loginController->authenticate();
    }

    private function executeRoute($mappedString) {
        $queryString = explode("/", $mappedString);
        $className = $queryString['0'];
        $methodName = $queryString['1'];
        $ctrlController = new $className();
        $ctrlController->{$methodName}();
    }

    private function isPublicRoute($resourseRoute) {
        $parts = explode("/", $resourseRoute);
        return ($parts[0] === "PublicController" ? true : false);
    }

}

$frontController = new FrontController();
$frontController->processRoute();
//$url = $_GET['route'];
//
//if ($url === "") {
//    $url = "base";
//}
//$mappedString = $routes[$url];
//if ($mappedString === null) {
//    require("./views/not_Found.php");
//    die();
//}
//
//// User Authentication
//session_start();
//$username = $_SESSION['USER_NAME'];
//if ($username === null) {
//    $loginController = new LoginController();
//    $ValidUser = $loginController->authenticate();
//    if (!$ValidUser) {
//        require("./views/not_authorized.php");
//        die();
//    } else {
//        $_SESSION['USER_NAME'] = $ValidUser;
//    }
//}
//
//$queryString = explode("/", $mappedString);
//$className = $queryString['0'];
//$methodName = $queryString['1'];
//$ctrlController = new $className();
//$ctrlController->{$methodName}();
//

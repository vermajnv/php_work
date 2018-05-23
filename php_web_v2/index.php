<?php

require("./routes.php");
require("./controllers/testController.php");
require("./controllers/college_controller.php");
require("./controllers/course_controller.php");
require("./lib/util.php");
require("./controllers/HomeController.php");
require("./controllers/login_controller.php");
require("./controllers/LogOutController.php");
require("./controllers/PublicController.php");

class FrontController {

    const LOGIN_KEY = "LOGIN_KEY";

    public function processRoute() {
	global $routes;
	$url = $_GET["route"];
//	$this->processPublic();
	// Route Maping function
	//if no mapping is found
	$resourseRoute = $this->MappedRoute($url, $routes);
	if (!$resourseRoute) {
	    require("./views/not_found.php");
	    die();
	}

	$isPublicRoute = $this->isPublicRoute($resourseRoute);
	if (!$isPublicRoute && !$this->loggedInUser()) {
	    $validUser = $this->authenticateRequest();
	    // if not valid user
	    if (!$validUser) {
		$queryString = $_SERVER["QUERY_STRING"];
		$qString = str_replace("route=", "", $queryString);
//		echo $qString;
		require("./views/login_failed.php");
		die();
	    }
	    // if valid user
	    $this->updateLoggedInUser($validUser);
	}
	$this->executeRoute($resourseRoute);
    }

    private function MappedRoute($url, $routes) {
	$url = ($url === "") ? "base" : $url;
	$mappedString = $routes[$url];
	return ($mappedString ? $mappedString : null);
    }

    function loggedInUser() {
	session_start();
	return isset($_SESSION[self::LOGIN_KEY]) ? true : false;
    }

    function updateLoggedInUser($loginValue) {
	$_SESSION[self::LOGIN_KEY] = $loginValue;
    }

    function authenticateRequest() {
	$loginController = new LoginController();
	$validUser = $loginController->authenticate();
	return $validUser ? true : false;
    }

    function executeRoute($resourceRoute) {
	$parts = explode("/", $resourceRoute);
	$className = $parts[0];
	$methodName = $parts[1];
	//echo $className."</br>";
	//echo $methodName;
	$ctrlObj = new $className();
	$ctrlObj->{$methodName}();
    }
    
    function isPublicRoute($resourceRoute) {
	$parts = explode("/", $resourceRoute);
	$className = $parts[0];
	return ($className === "PublicController" ? true : false);
    }
    
    function processPublic() {
	    require("./views/public/default.php");
	}
}

$frontController = new FrontController();
$frontController->processRoute();


<?php

require("./models/login/login_model.php");

class LoginController {

    private $model;

    public function __construct() {
	$this->model = new LoginModel();
    }

    function authenticate() {
	$username = $_SERVER["PHP_AUTH_USER"];
	$password = $_SERVER["PHP_AUTH_PW"];
	$isValidUser = $this->model->isValidUser($username, $password);
	return $isValidUser;
    }

}

<?php

require("./models/login/login_model.php");
class LoginController {
    private $model;
    public function __construct() {
	$this->model = new LoginModel();
    }
    
    function authenticate() {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$isValidUser = $this->model->isValidUser($username, $password);
	return $isValidUser;
    }
}

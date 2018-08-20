<?php

require("./models/login/loginModel.php");

class LoginController {

    private $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    function authenticate() {
        $username = $_SERVER['PHP_AUTH_USER'];
        $password = $_SERVER['PHP_AUTH_PW'];
        $isValidUser = $this->loginModel->isValidUser($username, $password);
        return $isValidUser;
    }

}

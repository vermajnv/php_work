<?php

require("./models/login/loginModel.php");

class LoginController {

    private $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    function authenticate() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        return $this->loginModel->isValidUser($username, $password);
    }

}

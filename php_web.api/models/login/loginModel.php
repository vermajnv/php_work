<?php

class LoginModel {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost; dbname=collegedb", "root", "nayan@");
    }

    public function isValidUser($username, $password) {
//        echo $username;
//        var_dump($this->con);
        $stmt = $this->con->query("SELECT username from login where username ='$username' and password = '$password'");
//        print_r($stmt);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
//        print_r($result);
        return $result ? $result["username"] : false;
    }

}

//$loginModel = new LoginModel();
//$loginModel->isValidUser('admin', 'admin');

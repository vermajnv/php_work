<?php

class LoginModel  {
    private $conn;
    public function __construct() {
	$this->conn = new PDO("mysql:host=localhost;dbname=collegedb","root", "nayan@");
    }
    
    public function isValidUser($username, $password) {
	$stmt = $this->conn->query("select username from login where username = '$username' and password='$password'");
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
//	print_r($result);
	return $result ? $result["username"] : false;
    }
}


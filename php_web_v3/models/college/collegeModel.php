<?php

class CollegeModel {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost; dbname=collegedb", "root", "nayan@");
    }

    function retrieveAll() {
        $stmt = $this->con->query("select * from colleges");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retrieveAllWhere($collegeId) {
        $stmt = $this->con->query("select * from colleges where collegeId = $collegeId");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function deleteAll() {
        $this->con->query("delete from colleges");
    }

    function deleteWhere($collegeId) {
        $this->con->query("delete from colleges where collegeId = $collegeId");
    }

    function create($name, $contactNo, $address, $picture) {
        $collegeId = rand(100, 999);
        $this->con->query("insert into colleges (name, contactNo, address, collegeId, picture) values ('$name', '$contactNo', '$address', '$collegeId', '$picture')");
    }

    function update($whereId, $name, $contactNo, $address, $picture) {
        $this->con->query("update colleges set name = '$name', contactNo = '$contactNo', address = '$address', picture = '$picture' where collegeId = '$whereId'");
    }

}

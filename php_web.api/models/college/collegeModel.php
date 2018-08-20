<?php

class collegeModel {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=collegedb", "root", "nayan@");
    }

    function create($name, $contactNo, $address, $collegeId) {
        $this->con->query("INSERT INTO colleges (name, contactNo, address, collegeId) VALUES ('$name', '$contactNo', '$address', '$collegeId')");
    }

    function retrieveAll() {
        $stmt = $this->con->query("SELECT * from colleges");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retrieveAllWhere($id) {
        $stmt = $this->con->query("SELECT * from colleges where collegeId = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function update($name, $contactNo, $address, $picture, $collegeId) {
        $this->con->query("update colleges set name='$name',contactNo = '$contactNo',address='$address' , picture='$picture' where collegeId = '$collegeId'");
    }

    function deleteAll() {
        $this->con->query("delete from colleges");
    }

    function deleteWhere($clgId) {
        $this->con->query("delete from colleges where collegeId='$clgId'");
    }

}

$collegeModel = new collegeModel();

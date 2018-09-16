<?php

class CollegeModel {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost; dbname=collegedb", "root", "nayan@");
    }

    function retrieveAll() {
        $stmt = $this->con->prepare("select * from colleges");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retrieveAllWhere($collegeId) {
        $stmt = $this->con->prepare("select * from colleges where collegeId = :collegeId");
        $stmt->execute(array(":collegeId" => $collegeId));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function deleteAll() {
        $stmt = $this->con->prepare("delete from colleges");
        $stmt->execute();
    }

    function deleteWhere($collegeId) {
        $stmt = $this->con->prepare("delete from colleges where collegeId = :collegeId");

        $stmt->execute(array(":collegeId" => $collegeId));
    }

    function create($name, $contactNo, $address, $picture) {
        $collegeId = rand(100, 999);
        $stmt = $this->con->prepare("insert into colleges (name, contactNo, address, collegeId, picture) values (:name, :contactNo, :address, :collegeId, :picture)");
        $stmt->execute(array(":name" => $name, ":contactNo" => $contactNo, ":address" => $address, ":collegeId" => $collegeId, ":picture" => $picture));
    }

    function update($whereId, $name, $contactNo, $address, $picture) {
        $stmt = $this->con->prepare("update colleges set name = :name, contactNo = :contactNo, address = :address, picture = :picture where collegeId = :whereId");
        $stmt->execute(array(":name" => $name, ":contactNo" => $contactNo, ":address" => $address, ":picture" => $picture, ":whereId" => $whereId));
    }

}

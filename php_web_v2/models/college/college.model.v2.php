<?php

// we will make class to overcome name conflict in 
// imported file

class College {
    private $con;
//    $this->con = new PDO("mysql:host=localhost;dbname=collegedb", "root", "nayan@");
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=collegedb", "root", "nayan@");
    }

    function retrieveAll() {

        $stmt = $this->con->query("SELECT * from colleges");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // print_r (retrieveAll());
    function retrieveAllWhere($clgId) {
        $stmt = $this->con->query("SELECT * from colleges where collegeId = '$clgId'");
        // Here we use fetch only because we need single array
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // print_r(retrieveAllWhere(10002));

    function deleteAll() { 
        $this->con->query("DELETE * from colleges");
    }

    function deleteWhereId($clgId) {
        $this->con->query("DELETE from colleges where collegeId = '$clgId'");
    }

    function update($newName, $newNo, $newAddress, $whereId) {
        return $this->con->query("UPDATE colleges SET name ='$newName', contactNo = '$newNo', address = '$newAddress' where collegeId = '$whereId'");
    }

    function create($name, $clgId, $no, $address) {
        return $this->con->query("INSERT into colleges (name, collegeId, contactNo, address) VALUES ('$name', '$clgId', '$no', '$address')");
    }

}

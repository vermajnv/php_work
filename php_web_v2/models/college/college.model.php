<?php
$con = new PDO("mysql:host=localhost;dbname=collegedb","root","nayan@");
// var_dump($con);

 function retrieveAll() {
    global $con; 
    $stmt = $con->query("SELECT * from colleges");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// print_r (retrieveAll());
function retrieveAllWhere($clgId) {
    global $con;
    $stmt = $con->query("SELECT * from colleges where collegeId = '$clgId'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// print_r(retrieveAllWhere(10002));

function deleteAll() {
    global $con;
    $con->query("DELETE * from colleges");
}

function deleteWhereId($clgId) {
    global $con;
    $con->query("DELETE from colleges where collegeId = '$clgId'");
}

function update($newName, $newNo, $newAddress, $whereId) {
    global $con;
    return $con->query("UPDATE colleges SET name ='$newName', contactNo = '$newNo', address = '$newAddress' where collegeId = '$whereId'");
}

function create($name, $clgId, $no, $address) {
    global $con;
    return $con->query("INSERT into colleges (name, collegeId, contactNo, address) VALUES ('$name', '$clgId', '$no', '$address')");
}

// print_r(create("JNV", "10045", "97924313", "LMP"));
// print_r(update("MNIT", "880820662", "ALLAHABAD", "10001"));

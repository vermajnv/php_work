<?php
// for courses
$con = new PDO("mysql:path=localhost;dbname=collegedb","root","nayan@");
    
function retrieveAll() {
    global $con;
    $stmt = $con->query("select * from courses");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllWhere($courseCode) {
    global $con;
    $stmt = $con->query("select * from courses where CODE = '$courseCode'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function deleteAll() {
    global $con;
    $con->query("delete * from courses");
}

function deleteWhich($courseCode) {
    global $con;
    $con->query("delete * from courses where CODE = '$courseCode'");
}

function insert($code, $duration, $title) {
    global $con;
    $con->query("insert into courses (CODE, DURATION, TITLE) VALUES ('$code', '$duration', '$title')");
}
<?php

class Courses {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=collegedb", "root", "nayan@");
    }

    function retrieveAll() {
       
        $stmt = $this->con->query("select * from courses");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retrieveAllWhere($courseCode) {
      
        $stmt = $this->con->query("select * from courses where CODE = '$courseCode'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function deleteAll() {
       
        $this->con->query("delete * from courses");
    }

    function deleteWhich($courseCode) {
        $this->con->query("delete from courses where CODE = '$courseCode'");
    }

    function insert($code, $duration, $title) {
        
        $this->con->query("insert into courses (CODE, DURATION, TITLE) VALUES ('$code', '$duration', '$title')");
    }
    
    function updateWhereCode($newCode, $newDuration, $newTitle, $whereCode) {
        return $this->con->query("UPDATE courses SET CODE ='$newCode', DURATION = '$newDuration', TITLE = '$newTitle' where CODE = '$whereCode'");
    }

}

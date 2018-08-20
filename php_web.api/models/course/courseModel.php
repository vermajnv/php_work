<?php

class CourseModel {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=collegedb", "root", "nayan@");
    }

    public function retrieveAll() {
//        echo "inside retrieve all";
        $stmt = $this->con->query("SELECT * from courses");
//        echo "query exeuctes";
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function retrieveAllWhere($courseCode) {
        $stmt = $this->con->query("SELECT * from courses where CODE = '$courseCode'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($code, $duration, $title) {
        $this->con->query("INSERT INTO courses(CODE, DURATION, TITLE) values('$code', '$duration', '$title')");
    }

    public function update($code, $newCode, $newDuration, $newTitle) {
        $this->con->query("UPDATE courses SET CODE = '$newCode', DURATION = '$newDuration', TITLE = '$newTitle' where CODE = '$code'");
    }

    public function deleteAll() {
        $this->con->query("DELETE from courses");
    }

    public function deleteWhere($code) {
        $this->con->query("DELETE from courses where CODE = '$code'");
    }

}

//$courseModele = new courseModel();
//$courseModele->deleteWhere("NCS-701");

<?php

require("./models/course/course.model.v2.php");

class CourseController {

    private $courseModel;

    public function __construct() {
	$this->courseModel = new Courses();
    }

    function list1() {
	$rows = $this->courseModel->retrieveAll();
	require("./views/courses/list_courses.php");
    }

    function delete() {
	$courseCode = $_POST["courseCode"];
	$this->courseModel->deleteWhich($courseCode);
	redirectTo("/courses");
    }
    
    function updateForm() {
	$courseCode = $_POST["courseCode"];
	$row = $this->courseModel->retrieveAllWhere($courseCode);
	require("./views/courses/update_courses.php");
    }
    
    function update() {
	$newCode = $_POST["newCode"];
	$newDuration = $_POST["newDuration"];
	$newTitle = $_POST["newTitle"];
	$courseCode = $_POST["courseCode"];
	$this->courseModel->updateWhereCode($newCode, $newDuration, $newTitle, $courseCode);
	redirectTo("/courses");
    }
    
    function createForm() {
	require("./views/courses/create.course.form.php");
    }
    
    function create() {
	$courseCode = $_POST["courseCode"];
	$duration = $_POST["duration"];
	$title = $_POST["title"];
	$this->courseModel->insert($courseCode, $duration, $title);
	redirectTo("/courses");
	
    }
}


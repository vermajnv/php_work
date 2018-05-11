<?php

require("../models/course/course.model.v2.php");

class CourseController {

    private $courseModel;

    public function __construct() {
	$this->courseModel = new Courses();
    }

    function list1() {
	$rows = $this->courseModel->retrieveAll();
	require("../views/courses/list_courses.php");
    }

    function delete() {
	$courseCode = $_GET["courseCode"];
	$this->courseModel->deleteWhich($courseCode);
	header("Location:/php_web/controllers/course_controller.php?action=list1", 302);
    }
    
    function updateForm() {
	$courseCode = $_GET["courseCode"];
	$row = $this->courseModel->retrieveAllWhere($courseCode);
	require("../views/courses/update_courses.php");
    }
    
    function update() {
	$newCode = $_GET["newCode"];
	$newDuration = $_GET["newDuration"];
	$newTitle = $_GET["newTitle"];
	$courseCode = $_GET["courseCode"];
	$this->courseModel->updateWhereCode($newCode, $newDuration, $newTitle, $courseCode);
	header("Location:/php_web/controllers/course_controller.php?action=list1", 302);
    }
    
    function createForm() {
	require("../views/courses/create.course.form.php");
    }
    
    function create() {
	$courseCode = $_GET["courseCode"];
	$duration = $_GET["duration"];
	$title = $_GET["title"];
	$this->courseModel->insert($courseCode, $duration, $title);
	header("Location:/php_web/controllers/course_controller.php?action=list1", 302);
	
    }

}

$action = $_GET["action"];
//echo $action;
$coursecontroller = new CourseController();
$coursecontroller->{$action}();

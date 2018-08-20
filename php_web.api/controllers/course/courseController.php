<?php

require("./models/course/courseModel.php");

class CourseController {

    private $courseModel;

    function __construct() {
        $this->courseModel = new CourseModel();
    }

    function getOne($code) {
        return $this->courseModel->retrieveAllWhere($code);
    }

    function get($code) {
        if ($code == null) {
            $rows = $this->courseModel->retrieveAll();
        } else {
            $rows = $this->getOne($code);
        }
        $jsonObj = json_encode($rows);
        print_r($jsonObj);
    }

    function post() {
        $requestedJsonString = file_get_contents("php://input");
        $jsonDataObj = json_decode($requestedJsonString);
        $code = $jsonDataObj->CODE;
        $duration = $jsonDataObj->DURATION;
        $title = $jsonDataObj->TITLE;
        $this->courseModel->create($code, $duration, $title);
    }

    function put($code) {
        $requestedJsonString = file_get_contents("php://input");
        $jsonDataObj = json_decode($requestedJsonString);
        $newCode = $jsonDataObj->newCode;
        $newDuration = $jsonDataObj->newDuration;
        $newTitle = $jsonDataObj->newTitle;
        $this->courseModel->update($code, $newCode, $newDuration, $newTitle);
    }

    function delete($code) {
        $this->courseModel->deleteWhere($code);
    }

}

<?php

//controller file for college
require("./models/college/college.model.v2.php");

class CollegeController {
    private $collegeModel;

    function __construct() {
        $this->collegeModel = new College();
    }

    private function getOne($clgId) {
	return $this->collegeModel->retrieveAllWhere($clgId);
    }
    public function get($clgId = null) {
	if(!$clgId) {
	    $rows = $this->collegeModel->retrieveAll();
	}else {
	    $rows = $this->getOne($clgId);
	}
        
	echo json_encode($rows);
    }

    function post() {
	$jsonRequestString = file_get_contents("php://input");
	$reqObj = json_decode($jsonRequestString);
        $name = $reqObj->name;
        $clgId = rand(10000, 50000);
        $no = $reqObj->contactNo;
        $address = $reqObj->address;
        $this->collegeModel->create($name, $clgId, $no, $address);
    }

    function delete($whereRegNo) {
        $this->collegeModel->deleteWhereId($whereRegNo);
    }

    function put($whereRegNo) {
	$jsonRequestString = file_get_contents("php://input");
	$reqObj = json_decode($jsonRequestString);
        $newName = $reqObj->name;
        $newNo = $reqObj->no;
        $newAddress = $reqObj->address;
        $this->collegeModel->update($newName, $newNo, $newAddress, $whereRegNo);
    }
}



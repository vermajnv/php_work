<?php

//controller file for college
require("../models/college/college.model.v2.php");

class CollegeController {
    private $collegeModel;

    function __construct() {
        $this->collegeModel = new College();
    }

    public function list() {
        $rows = $this->collegeModel->retrieveAll();
        require("../views/college/list_colleges.php");
    }

    function create() {
        $name = $_GET["clgName"];
        $clgId = rand(10000, 50000);
        $no = $_GET["no"];
        $address = $_GET["address"];
        // url : localhost:9000/sourceFile/creating.college.php?clgName=gillu&no=88808080&address=kheri
        $this->collegeModel->create($name, $clgId, $no, $address);
        header("Location: /php_web/controllers/college_controller.php?action=list", 302);
    }

    function createForm() {
        require("../views/college/create.college.form.php");
    }

    function delete() {
        $clgId = $_GET["clgId"];
        $this->collegeModel->deleteWhereId($clgId);
        header("Location:/php_web/controllers/college_controller.php?action=list", 302);
    }

    function update() {
        $newName = $_GET["newName"];
        $newNo = $_GET["newNo"];
        $newAddress = $_GET["newAddress"];
        $whereId = $_GET["whereId"];
        $this->collegeModel->update($newName, $newNo, $newAddress, $whereId);
        header("Location:/php_web/controllers/college_controller.php?action=list", 302);
    }

    function updateForm() {
        $clgId = $_GET["clgId"];
        $row = $this->collegeModel->retrieveAllWhere($clgId);
        require("../views/college/update.college.form.php");
    }

}

$action = $_GET["action"];
//echo $action;
$collegeController = new CollegeController();
$collegeController->{$action}();


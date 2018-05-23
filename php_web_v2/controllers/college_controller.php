<?php

//controller file for college
require("./models/college/college.model.v2.php");

class CollegeController {
    private $collegeModel;

    function __construct() {
        $this->collegeModel = new College();
    }

    public function list() {
        $rows = $this->collegeModel->retrieveAll();
        require("./views/college/list_colleges.php");
    }

    function create() {
        $name = $_POST["clgName"];
        $clgId = rand(10000, 50000);
        $no = $_POST["no"];
        $address = $_POST["address"];
        // url : localhost:9000/sourceFile/creating.college.php?clgName=gillu&no=88808080&address=kheri
        $this->collegeModel->create($name, $clgId, $no, $address);
        redirectTo("/colleges");
    }

    function createForm() {
        require("./views/college/create.college.form.php");
    }

    function delete() {
        $clgId = $_POST["clgId"];
        $this->collegeModel->deleteWhereId($clgId);
        redirectTo("/colleges");
    }

    function update() {
        $newName = $_POST["newName"];
        $newNo = $_POST["newNo"];
        $newAddress = $_POST["newAddress"];
        $whereId = $_POST["whereId"];
        $this->collegeModel->update($newName, $newNo, $newAddress, $whereId);
        redirectTo("/colleges");
    }

    function updateForm() {
        $clgId = $_POST["clgId"];
        $row = $this->collegeModel->retrieveAllWhere($clgId);
        require("./views/college/update.college.form.php");
    }
}



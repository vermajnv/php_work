<?php

class CollegeController {

    private $collegeModel;

    public function __construct() {
        $this->collegeModel = new CollegeModel();
    }

    function createForm() {
        require("./views/createCollegeForm.php");
    }

    function create() {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $picture = $_POST['picture'];
        $this->collegeModel->create($name, $contact, $address, $picture);
//        header("Location:" . baseUrl("/college"), 302);
        redirect("/college");
    }

    function delete() {
        $collegeId = $_POST['collegeId'];
        $this->collegeModel->deleteWhere($collegeId);
        redirect("/college");
    }

    function updateForm() {
        $rows = $this->collegeModel->retrieveAllWhere($_POST['collegeId']);
        require("./views/updateCollegeForm.php");
    }

    function update() {
        $collegeId = $_POST['collegeId'];
        $updatedName = $_POST['name'];
        $updatedAddress = $_POST['address'];
        $updatedContact = $_POST['contact'];
        $updatedPicture = $_POST['picture'];
        $this->collegeModel->update($collegeId, $updatedName, $updatedContact, $updatedAddress, $updatedPicture);
        redirect("/college");
    }

    function listCollege() {
        $rows = $this->collegeModel->retrieveAll();
        require("./views/college_list.php");
    }

}

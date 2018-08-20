<?php

require("./models/college/collegeModel.php");

class CollegeController {

    private $collegeModel;

    public function __construct() {
        $this->collegeModel = new collegeModel();
    }

    function getOne($whereId) {
        return $this->collegeModel->retrieveAllWhere($whereId);
    }

    function get($whereId) {
        if ($whereId == null) {
            $rows = $this->collegeModel->retrieveAll();
        } else {
            $rows = $this->getOne($whereId);
        }

        echo json_encode($rows);
    }

    function put($whereClgId) {
        $requestedJsonString = file_get_contents("php://input");
        $requestString = json_decode($requestedJsonString);
        $name = $requestString->name;
        $address = $requestString->address;
        $contact = $requestString->contact;
        $picture = $requestString->picture;
        $this->collegeModel->update($name, $contact, $address, $picture, $whereClgId);
    }

    function post() {
        $collegeId = rand(100, 200);
        $requestJsonString = file_get_contents("php://input");
        $requestString = json_decode($requestJsonString);
        $name = $requestString->name;
        $address = $requestString->address;
        $contact = $requestString->contact;
        $this->collegeModel->create($name, $contact, $address, $collegeId);
    }

    function delete($whereClgId) {
        $this->collegeModel->deleteWhere($whereClgId);
    }

}

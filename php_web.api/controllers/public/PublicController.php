<?php

class PublicController {

    public function index() {
        require("./views/homepage.php");
    }

    public function feedback() {
        require("./views/feedback.php");
    }

    public function contact() {
        require("./views/contact.php");
    }

}

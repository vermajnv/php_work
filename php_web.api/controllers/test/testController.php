<?php

class TestController {

    public function test() {
        echo "This is the test function of test controller";
    }

    function doingSomething() {
        $name = "nayan";
        require("./views/test.php");
    }

}

<?php
 
class TestController {
    public function  test() {
	
	echo "<h1>hello test page</h1>";
    }
    
    public function  doSomthing() {
//	echo "<h1>Doing Somthing</h1>";
	global $contextPath;
	$data = "1243 HELLO";
	require("./views/test.php");
    }
}

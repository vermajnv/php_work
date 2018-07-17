<?php 

$routes = array();

// Associative array test is map against Controller/test; 
$routes["test"] = "TestController/test";
$routes["test/do"] = "TestController/doSomthing";

$routes["base"] = "HomeController/index";
$routes["logout"] = "LogOutController/logout";

//public routes
$routes["public"] = "PublicController/index";
$routes["public/contacts"] = "PublicController/contacts";
$routes["public/feedback"] = "PublicController/feedback";
//Colleges

$routes["colleges"] = "CollegeController/list";
$routes["colleges/create"] = "CollegeController/create";
$routes["colleges/update"] = "CollegeController/update";
$routes["colleges/delete"] = "CollegeController/delete";

//Courses

$routes["courses"] = "CourseController/list1";
$routes["courses/create"] = "CourseController/create";
$routes["courses/update"] = "CourseController/update";
$routes["courses/delete"] = "CourseController/delete";

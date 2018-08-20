<?php

$routes = array();
//Test
$routes["test"] = "TestController/test";
$routes["test/do"] = "TestController/doingSomething";
// For base
$routes["base"] = "HomeController/home";
// For Logout
$routes["logout"] = "LogoutController/logout";
// For login
$routes["login"] = "LoginController/authenticate";
// For college
$routes["college"] = "CollegeController/listCollege";
$routes["college/update"] = "CollegeController/update";
$routes["college/delete"] = "CollegeController/delete";
$routes["college/create"] = "CollegeController/create";


// For Courses
$routes["course"] = "CourseController/viewCourse";
$routes["course/update"] = "CourseController/update";
$routes["course/delete"] = "CourseController/delete";
$routes["course/create"] = "CourseController/create";
// Public pages
$routes["public"] = "PublicController/index";
$routes["public/feedback"] = "PublicController/feedback";
$routes["public/contact"] = "PublicController/contact";

<?php

$routes = array();
$routes["college"] = "CollegeController/listCollege";
$routes["college/update"] = "CollegeController/update";
$routes["college/updateForm"] = "CollegeController/updateForm";
$routes["college/create"] = "CollegeController/create";
$routes["college/createForm"] = "CollegeController/createForm";
$routes["college/delete"] = "CollegeController/delete";

// For base url

$routes["base"] = "HomeController/index";

// For login
$routes['login'] = "LoginController/authenticate";

// For Logout
$routes['logout'] = "LogoutController/logout";

//Public File

$routes["public/feedback"] = "PublicController/feedback";
$routes["public/contact"] = "PublicController/contact";

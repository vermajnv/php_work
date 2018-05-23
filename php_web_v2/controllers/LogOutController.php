<?php

class LogOutController {
    public function logout() {
	session_destroy();
	require("./views/login_failed.php");
    }
}

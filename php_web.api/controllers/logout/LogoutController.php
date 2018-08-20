<?php

class LogoutController {

    function logout() {
        session_destroy();
        require("./views/notAuthorized.php");
        redirect("/");
    }

}

<?php

class LogoutController {

    function logout() {
        session_destroy();
        redirect("/");
    }

}

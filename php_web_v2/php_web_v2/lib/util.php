<?php

function baseUrl($url) {
    $contaxtPath = "/" . explode("/", $_SERVER['REQUEST_URI'])[1];
    return $contaxtPath . $url;
}

function redirect($to) {
    $url = baseUrl($to);
    header("Location:" . $url, 302);
}

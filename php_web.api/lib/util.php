<?php

function baseUrl($url) {
    $contextPath = "/" . explode("/", $_SERVER["REQUEST_URI"])[1];
    return $contextPath . $url;
}

function redirect($to) {
    $url = baseUrl($to);
    header("Location: $url", 302);
}

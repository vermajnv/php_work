<?php

function baseURL($url = "") {
    $parts = explode("/", $_SERVER["REQUEST_URI"]);
    $path = $parts[1];
    $contextPath = "/".$path;
    return $contextPath.$url;
}

function redirectTo($to) {
    $url = baseURL($to);
    header("Location: $url", 302);
}

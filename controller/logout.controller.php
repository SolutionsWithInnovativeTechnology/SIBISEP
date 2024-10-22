<?php
    session_start();
    session_destroy();

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $root = ($host == "sibisep") ? "" : "/SIBISEP";
    $url = "$protocol://$host$root";

    header("Location:$url");
    include "redirect.php";
    die();
?>
<?php
    session_start();
    session_destroy();

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['SCRIPT_NAME'], 2);
    $page = "";
    $url = "$protocol://$host$path/$page";
    header("Location:$url");
?>
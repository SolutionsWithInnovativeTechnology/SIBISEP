<?php
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $root = "";

    if($host == "localhost"){
        $root = "/SIBISEP"; 
    }
    $url = "$protocol://$host$root";

    header("Location:$url");
    die();
?>
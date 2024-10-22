<?php

use function PHPSTORM_META\type;

    session_start();

    $user = $_POST['user'];

    $_SESSION['user'] = $user;
    $_SESSION['ur'] = 611;
    $_SESSION['area'] = "Area de Ejemplo";

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $root = ($host == "localhost") ? "/SIBISEP" : "";
    $url = "$protocol://$host$root";
    
    header("Location:$url");
    include "redirect.php";
    die();
?>
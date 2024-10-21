<?php
    session_start();

    $user = $_POST['user'];

    $_SESSION['user'] = $user;
    $_SESSION['ur'] = 611;
    $_SESSION['area'] = "Area de Ejemplo";

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['SCRIPT_NAME'], 2);
    $page = "";
    $url = "$protocol://$host$path/$page";
    
    header("Location:$url");
    die();
?>
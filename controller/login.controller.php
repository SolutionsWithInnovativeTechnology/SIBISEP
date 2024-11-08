<?php
    session_start();

    $user = $_POST['user'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $_SESSION['id'] = 1;
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;
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
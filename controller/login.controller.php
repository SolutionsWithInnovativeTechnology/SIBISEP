<?php
    session_start();

    $user = $_POST['user'];

    $_SESSION['user'] = $user;
    $_SESSION['ur'] = 611;
    $_SESSION['area'] = "Area de Ejemplo";
    header("Location: ../");
?>
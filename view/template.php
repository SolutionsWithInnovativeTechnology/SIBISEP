<!DOCTYPE html>
<html lang="es">

<?php require_once "modules/head.php" ?>

<body class="bg-light vh-100 align-content-center">

    <?php include "modules/header.php" ?>

    <div class="container">
        <?php 

            if(!isset($_SESSION)){
                require "pages/login.php";
            } else{
                echo "aqui van a ir las páginas";
            }
            
        ?>
    </div>

    <script src="view/resources/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
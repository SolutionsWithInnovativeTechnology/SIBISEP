<!DOCTYPE html>
<html lang="es">

<?php require_once "modules/head.php" ?>

<body class="bg-light vh-100 d-flex flex-column align-items-center justify-content-center">

    <?php
        if(empty($_SESSION['user'])){
            require_once "view/pages/login.php";
        }else{
    ?>

    <?php include "modules/header.php" ?>

    <div class="container flex-grow-1 d-flex flex-column justify-content-center">
        <main class="d-flex flex-column align-items-center">

            <?php 
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        include_once "view/pages/$page.php";
                    }else{
                        include_once "view/pages/sistemas.php";
                    }
                ?>

        </main>
    </div>

    <script src="view/resources/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>

    <?php } ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<?php require_once "modules/head.php" ?>

<body class="bg-light vh-100 align-content-center">

    <?php include "modules/header.php" ?>

    <div class="container">
        <main class="d-flex flex-column align-items-center">

            <?php 
                
                if(isset($_GET['page'])){
                    $page = $_GET['page'];

                    include_once "view/pages/". $page. ".php";
                }else{
                    include_once "view/pages/sistemas.php";
                }

            ?>

        </main>
    </div>

    <script src="view/resources/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
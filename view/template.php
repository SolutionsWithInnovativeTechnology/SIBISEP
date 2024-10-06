<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBISEP</title>
    <link rel="stylesheet" href="view/resources/bootstrap-5.3.3/css/bootstrap.min.css">
</head>

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
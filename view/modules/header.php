<?php
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $root = ($host == "localhost") ? "/SIBISEP" : "";
    $url = "$protocol://$host$root";
?>

<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $url ?>">
                <img src="view/resources/img/logoCBTIS.webp" height="50" alt="Logo">
            </a>

            <div class="nav dropdown">
                <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" data-bs-auto-close="outside">
                    <?= $_SESSION['user'] ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end p-2" data-bs-theme="dark" style="width: 16rem;">
                    <li><span class="dropdown-item-text">UR: <?= $_SESSION['ur'] ?></span></li>
                    <li><span class="dropdown-item-text">Área: <?= $_SESSION['area'] ?></span></li>
                    <li class="dropdown-item-text">
                        <a href="controller/logout.controller.php" class="btn btn-dark w-100">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
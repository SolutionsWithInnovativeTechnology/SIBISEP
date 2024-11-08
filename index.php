<?php
    require_once "controller/template.controller.php";
    require_once "controller/bienes.controller.php";

    session_start();
    $template = new TemplateController();
    $template->ctr_template();

    $controller = $_GET['controller'] ?? '';
    $action = $_GET['action'] ?? '';

    if ($controller == 'bienes' && $action == 'save') {
        echo "<script>console.log('entro');</script>";
        $bienesController->ctr_save_bienes();
    }
?>
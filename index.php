<?php
    require_once "controller/template.controller.php";

    session_start();
    $template = new TemplateController();
    $template -> ctr_template();

?>
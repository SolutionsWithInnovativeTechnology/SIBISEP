<?php

class BienesController
{

    public static function ctr_get_bienes()
    {
        $table = "bienes";

        $response = BienesModel::mdl_show_bienes($table);

        return $response;
    }

    public static function ctr_save_bienes()
    {
        $no_sep = 1;
        $no_inventario = 1;
        $descripcion = $_POST['descripcion'];     
        $valor = $_POST['valor'];
        $documentacion = $_POST['documentacion'];
        $forma_adq = $_POST['forma_adq'];
        $fecha_adq = $_POST['fecha_adq'];
        $cantidad = $_POST['cantidad'];
        $fecha_reg = date("Y-m-d");

        $datos = array(
            
        );
    }
}

<?php

    require_once "connection.php";

    Class BienesModel{
        
        public static function mdl_show_bienes($table){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table");

            if($statement){
                $statement -> execute();
                $response = $statement->fetchAll();

                $statement -> closeCursor();
                $statement = null;

                return $response;
            }else{
                return false;
            }
            
        }



        public static function mdl_insert_bien($table){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table");

            if($statement){
                $statement -> execute();
                $response = $statement->fetchAll();

                $statement -> closeCursor();
                $statement = null;

                return $response;
            }else{
                return false;
            }
            
        }
    }

?>
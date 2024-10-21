<?php
    Class Connection{

        public static function connect() {
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_sibisep";         

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn -> exec("set names utf8mb4");
                return $conn;
            } catch (PDOException $e) {
                print $e -> getMessage();
                die();
            }
        }

    }

?>
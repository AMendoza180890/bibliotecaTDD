<?php
require_once 'envConexion.php';

class conexionBD{

    public static function conexion(){
        try {
            echo $servidor;
             $servdor = $servidor;
            // $basededatos = $databaseName;
            // $usuarios = $user;
            // $password = $passw;
            //$bd = new PDO("mysql:host=localhost;dbname=tesorosd_bdbibliotecatdd","tesorosd_library","yOLtH_qK?8gt");
            $bd = new PDO("mysql:host=localhost;dbname=tesorosd_bdbibliotecatdd", "tesorosd_library", "yOLtH_qK?8gt");
            $bd -> exec("set names utf8");

            return $bd;
        } catch (Exception $ex) {
            echo 'error - '.$ex;
        }
    }
}
?>
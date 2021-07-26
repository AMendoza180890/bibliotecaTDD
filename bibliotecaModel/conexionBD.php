<?php
include_once ("envConexion.php");
class conexionBD{
    
    public static function conexion(){
        try {
            global $servidor, $databaseName, $user, $passw;
            //echo $servidor;
            // $basededatos = $databaseName;
            // $usuarios = $user;
            // $password = $passw;
            //$bd = new PDO("mysql:host=localhost;dbname=tesorosd_bdbibliotecatdd","tesorosd_library","yOLtH_qK?8gt");
            $bd = new PDO("mysql:host=".$servidor.";dbname=".$databaseName, $user , $passw);
            $bd -> exec("set names utf8");
            
            return $bd;
        } catch (Exception $ex) {
            echo 'error - '.$ex;
        }
    }
}

?>
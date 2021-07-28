<?php
    require_once ('envConexion.php');
class conexionBD{
    public static function conexion(){
        try {
            global $servidor, $databaseName, $user, $passw;
            $bd = new PDO("mysql:host=".$servidor.";dbname=".$databaseName,$user,$passw);
            $bd -> exec("set names utf8");

            return $bd;
        } catch (Exception $ex) {
            echo 'error - '.$ex;
        }
    }
}
?>
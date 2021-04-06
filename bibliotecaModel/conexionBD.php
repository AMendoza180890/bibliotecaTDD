<?php
class conexionBD{
    public static function conexion(){
        try {
            $bd = new PDO("mysql:host=localhost;dbname=bdbibliotecatdd","root","");
            $bd -> exec("set names utf8");
            return $bd;
        } catch (Exception $ex) {
            echo 'error - '.$ex;
        }
    }
}
?>
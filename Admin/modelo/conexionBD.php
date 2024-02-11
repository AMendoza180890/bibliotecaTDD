<?php
//require_once('env.php');

class conexionBD
{
    protected function conexionMySQL()
    {
        try {
            $bd = new PDO("mysql:host=" . $_ENV['SER_VR'] . ";dbname=" . $_ENV['DATA_NAME'], $_ENV['USER_CON'], $_ENV['P_CON']);
            $bd->exec("set names utf8");
            return $bd;
        } catch (Exception $ex) {
            echo 'Error en cadena de conexion' . $ex;
        }
    }

    public static function conexion()
    {
        try {
            $cn = new conexionBD();
            return $cn->conexionMySQL();
        } catch (Exception $ex) {
            echo 'Error en la conexion - ' . $ex;
        }
    }
}

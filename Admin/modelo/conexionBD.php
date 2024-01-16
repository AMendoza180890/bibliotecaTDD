<?php
require_once('env.php');
class conexionBD
{
    protected function conexionMySQL()
    {
        try {
            $bd = new PDO("mysql:host=" . getenv('servidor') . ";dbname=" . getenv('databaseName'), getenv('user'), getenv('passw'));
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

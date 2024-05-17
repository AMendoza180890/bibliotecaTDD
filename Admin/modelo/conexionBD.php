<?php
error_reporting(0);
class conexionBD
{
    protected function conexionMySQL()
    {
        try {
            $bd = new PDO("mysql:host=" . $_ENV['SER_VR'] . ";dbname=" . $_ENV['DATA_NAME'], $_ENV['USER_CON'], $_ENV['P_CON']);
            $bd->exec("set names utf8");
            return $bd;
        } catch (Throwable) {
            die("Uncaught exception occurred!");
        } finally{
            echo 'error con la conexion';
        }
    }

    public static function conexion()
    {
        try {   
            $cn = new conexionBD();
            return $cn->conexionMySQL();
        } catch (Throwable) {
            die("Error en la conexion");
        } finally{
            echo 'Error con la conexion';
        }
    }
    
}

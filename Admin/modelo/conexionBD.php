<?php

    //require_once ('envConexion.php');

class conexionBD{
    // //propiedades
    protected $servidor =  "localhost"; 
    protected $databaseName = "tesorosd_bdbibliotecatdd"; 
    protected $user = "root";
    protected $passw = "";

    // //constructor para poder mantener la conexion a la base de datos por separado.
    // public function __construct($servidor, $databaseName, $user, $passw){
    //     try {
    //         $this->servidor = $servidor;
    //         $this->databaseName = $databaseName;
    //         $this->user = $user;
    //         $this->passw = $passw;

    //     } catch (Exception $ex) {
    //         echo 'error constructor- '.$ex;
    //     }
    // }

    // La funcion principal, es la encargada de poder realizar la conexion en las diferentes partes del sistema.
    protected function conexionMySQL(){
        try{    
            $bd = new PDO("mysql:host=" .$this->servidor . ";dbname=" . $this->databaseName, $this->user, $this->passw);
            $bd->exec("set names utf8");
            return $bd;
        } catch (Exception $ex) {
            echo 'error funcion privada - '.$ex;
        }
    }

    public static function conexion(){
        try {
            $cn = new conexionBD();
            return $cn->conexionMySQL();
        } catch (Exception $ex) {
            echo 'error funcion publica - '.$ex;
        }
    }
}
?>
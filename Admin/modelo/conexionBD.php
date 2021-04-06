<?php
class conexionBD{
    // private $host;
    // private $db;
    // private $user;
    // private $passw;

    //     public function __construct()
    //     {
    //     /*
    //     $this->host     =   $_SERVER['SERVER_NAME'];
    //     $this->db       =   "dbwebnica";
    //     $this->user     =   "root";
    //     $this->passw    =   "";
    //     */
    //     $this->host     =   'mysql1007.mochahost.com';
    //     $this->db       =   "marvin_dbwebnica";
    //     $this->user     =   "marvin_userWebNi";
    //     $this->passw    =   "Soloyo246$$";


    //     }

    static public function conexion(){
        try {
            $bd = new PDO("mysql:host=localhost;dbname=bdbibliotecatdd","root","");

            /*$bd = new PDO("mysql:host=localhost;dbname=tesorosd_bdbibliotecatdd","tesorosd_library","yOLtH_qK?8gt");*/

            $bd -> exec("set names utf8");

            return $bd;
        } catch (Exception $ex) {
            echo 'error - '.$ex;
        }
    }
}
?>
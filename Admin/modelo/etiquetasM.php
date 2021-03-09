<?php
require_once 'conexionBD.php';
class etiquetasM extends conexionBD{
    public static function listaEtiquetasM(){
        try {
            $pdo = conexionbd::conexion()->prepare("SELECT id, etiquetaDescripcion FROM catetiquetas");
            $pdo -> execute();
            return $pdo->fetchAll();
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
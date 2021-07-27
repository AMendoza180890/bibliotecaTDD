<?php
    require_once 'conexionBD.php';
class ayudaModel extends conexionBD{
    public static function mostrarAyudaM(){
        try {
            $pdo = conexionBD::conexion()->prepare("");
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }

    public static function insertarAyudaM(){
        try {
            $pdo = conexionBD::conexion()->prepare("");
            //$pdo->bindParam("variable", "campotabla",PDO::PARAM_STR);
            $pdo->execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
?>
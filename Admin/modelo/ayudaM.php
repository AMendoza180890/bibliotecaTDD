<?php
    require_once 'conexionBD.php';
class ayudaModel extends conexionBD{
    public static function mostrarAyudaM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcion, estado FROM artayuda");
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }

    public static function insertarAyudaM(){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO artayuda(id, titulo, descripcion, estado) VALUES (:id, :titulo, :descripcion, :estado)");
            $pdo->bindParam(":titulo", "",PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", "", PDO::PARAM_STR);
            $pdo->bindParam(":estado", "", PDO::PARAM_BOOL);
            $pdo->execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }

    public static function actualizarAyudaM(){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE artayuda SET titulo=:titulo, descripcion=:descripcion, estado=:estado WHERE id=:id");
            $pdo->bindParam(":id", "", PDO::PARAM_STR);
            $pdo->bindParam(":titulo", "", PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", "", PDO::PARAM_STR);
            $pdo->bindParam(":estado", "", PDO::PARAM_BOOL);
            $pdo->execute();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
?>
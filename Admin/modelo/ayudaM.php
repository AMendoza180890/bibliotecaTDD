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

    public static function actualizarAyudaM($infoAyuda){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE artayuda SET titulo=:titulo, descripcion=:descripcion, estado=:estado WHERE id = 1");
            $pdo->bindParam(":titulo", $infoAyuda["titulo"], PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", $infoAyuda["descripcion"], PDO::PARAM_STR);
            $pdo->bindParam(":estado", $infoAyuda["estado"], PDO::PARAM_BOOL);
            if($pdo->execute()){
                return true;
            }else {
                return false;
            }
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
?>
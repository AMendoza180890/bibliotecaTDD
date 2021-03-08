<?php

require_once 'conexionBD.php';

class rolesUsuarioM extends conexionBD{
    public static function mostrarRolesUsuario(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT rolid, catRolesDescripcion FROM catroles");
            $pdo ->execute();
            return $pdo->fetchAll();
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    // public static function setRolesUsuarioM($idUsuario){
    //     try {
    //         $pdo = conexionBD::conexion()->prepare("SELECT rolid FROM usuarios WHERE id = :id");
    //         $pdo -> bindParam("id", $idUsuario,PDO::PARAM_INT);
    //         $pdo ->execute();
    //         return $pdo->fetch();
    //     } catch (Exception $ex) {
    //         echo 'Error -'.$ex;
    //     }
    // }
}
?>
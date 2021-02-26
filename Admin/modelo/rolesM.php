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
}
?>
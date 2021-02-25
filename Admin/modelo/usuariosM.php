<?php
require_once "conexionBD.php";

class usuariosM extends conexionBD{
    
    static public function ingresoSesionUsuario($datosC){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.usuario = :usuario and usuarios.clave = :clave");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();

        } catch (Exception $ex) {
            echo "Error - ".$ex;
        }
    }

    static public function listadeUsuariosM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid");

            $pdo -> execute();

            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'error - '.$ex;
        }
    }
}

?>
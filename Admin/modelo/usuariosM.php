<?php
require_once "conexionBD.php";

class usuariosM extends conexionBD{
    
    static public function ingresoSesionUsuario($datosC){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuario, clave, foto, rolid FROM usuarios WHERE usuario = :usuario and clave = :clave");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();

        } catch (Exception $ex) {
            echo "Error - ".$ex;
        }
    }
}

?>
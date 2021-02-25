<?php
require_once "conexionBD.php";

class usuariosM extends conexionBD{
    
    static public function ingresoSesionUsuario($datosC){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuario, clave, foto, rolid FROM usuarios WHERE usuario = :usuario and clave = :clave");

            $pdo -> bindParam(":usuario", $datosC["user"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["pass"], PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();

            echo var_dump($pdo->fetch());

        } catch (Exception $ex) {
            echo "Error - ".$ex;
        }
    }
}

?>
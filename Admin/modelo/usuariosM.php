<?php
require_once "conexionBD.php";

class usuariosM extends conexionBD{
    
    static public function ingresoSesionUsuario($datosC){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.usuario = :usuario and usuarios.clave = :clave");

            $pdo -> bindParam(":usuario", $datosC["user"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["pass"], PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();

            echo var_dump($pdo->fetch());

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

    static public function registrarUsuariosM($datosNuevoUsuario){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO usuarios (usuario, clave, foto, rolid) VALUES (:usuario,:clave,:foto,:rolid)");
            
            $pdo -> bindParam("usuario",$datosNuevoUsuario["usuario"],PDO::PARAM_STR);
            $pdo -> bindParam("clave",$datosNuevoUsuario["clave"],PDO::PARAM_STR);
            $pdo -> bindParam("foto",$datosNuevoUsuario["foto"],PDO::PARAM_STR);
            $pdo -> bindParam("rolid",$datosNuevoUsuario["rol"],PDO::PARAM_INT);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }            
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}

?>
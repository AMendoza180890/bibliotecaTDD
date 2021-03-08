<?php
require_once 'conexionBD.php';
class usuarioBibliotecaM extends conexionBD {
    public static function iniciarSesionBibliotecaM($datosUsuario){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.usuario = :usuario and usuarios.clave = :clave");

            $pdo -> bindParam(":usuario", $datosUsuario["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosUsuario["passw"], PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();

            echo var_dump($pdo->fetch());
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
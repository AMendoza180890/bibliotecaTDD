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

    static public function editarRegistroUsuarioM($datosEditarUsuario){
        try {
            if ($datosEditarUsuario != null) {
                $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.id = :id");

                $pdo ->bindParam("id", $datosEditarUsuario, PDO::PARAM_INT);

                $pdo ->execute();

                return $pdo->fetch();
            }else{
                $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.id = :id");

                $pdo ->bindParam("id", $datosEditarUsuario, PDO::PARAM_INT);

                $pdo ->execute();

                return $pdo->fetchAll();
            }
            // $pdo = conexionBD::conexion()->prepare("UPDATE `usuarios` SET usuario=:usuario, clave=:clave, foto=:foto, rolid=:rolid WHERE id = :id");
            // $pdo->bindParam("id",$datosEditarUsuario["id"],PDO::PARAM_STR);
            // $pdo->bindParam("usuario", $datosEditarUsuario["usuario"], PDO::PARAM_STR);
            // $pdo->bindParam("clave", $datosEditarUsuario["clave"], PDO::PARAM_STR);
            // $pdo->bindParam("foto", $datosEditarUsuario["foto"], PDO::PARAM_STR);
            // $pdo->bindParam("rolid", $datosEditarUsuario["rolid"], PDO::PARAM_INT);

            // if ($pdo->execute()) {
            //     return true;
            // }else{
            //     return false;
            // }

        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    static public function DesactivarRegistroUsuarioM($codigoUsuario){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE usuarios SET rolid = 3 WHERE id = :id");
            $pdo -> bindParam("id", $codigoUsuario, PDO::PARAM_INT);
            if ($pdo->execute()) {
                return true;
            }else{
                return false;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function actualizarRegistroUsuarioM($datosActualizarUsuario){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE usuarios SET usuario=:usuario, clave=:clave, foto=:foto, rolid=:rolid WHERE id=:id");
            $pdo -> bindParam("id",$datosActualizarUsuario["id"],PDO::PARAM_STR);
            $pdo -> bindParam("usuario",$datosActualizarUsuario["usuario"],PDO::PARAM_STR);
            $pdo -> bindParam("clave",$datosActualizarUsuario["clave"],PDO::PARAM_STR);
            $pdo -> bindParam("foto",$datosActualizarUsuario["foto"],PDO::PARAM_STR);
            $pdo -> bindParam("rolid",$datosActualizarUsuario["rol"],PDO::PARAM_STR);
            
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }

            
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
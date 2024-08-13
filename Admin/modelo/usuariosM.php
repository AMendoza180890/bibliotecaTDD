<?php
require_once "conexionBD.php";

class usuariosM extends conexionBD
{

    static public function ingresoSesionUsuario($datosC)
    {
        try {
            //$password = password_hash($datosC["pass"], PASSWORD_DEFAULT);
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.email, usuarios.organizacion, usuarios.cargo, usuarios.telefono, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.usuario = :usuario");

            $pdo->bindParam(":usuario", $datosC["user"], PDO::PARAM_STR);
            //$pdo->bindParam(":clave", $password, PDO::PARAM_STR);
            $pdo->execute();
            return $pdo->fetch();
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }

    static public function listadeUsuariosM()
    {
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.email, usuarios.organizacion, usuarios.cargo, usuarios.telefono, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid");
            $pdo->execute();
            return $pdo->fetchAll();
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }

    static public function registrarUsuariosM($datosNuevoUsuario)
    {
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO usuarios (usuario, clave, email, organizacion, cargo, telefono, foto, rolid) VALUES (:usuario,:clave,:email,:organizacion,:cargo,:telefono,:foto,:rolid)");

            $pdo->bindParam("usuario", $datosNuevoUsuario["usuario"], PDO::PARAM_STR);
            $pdo->bindParam("clave", password_hash($datosNuevoUsuario["clave"], PASSWORD_DEFAULT), PDO::PARAM_STR);
            //$pdo->bindParam("clave", $datosNuevoUsuario["clave"], PDO::PARAM_STR);
            $pdo->bindParam("email", $datosNuevoUsuario["email"], PDO::PARAM_STR);
            $pdo->bindParam("organizacion", $datosNuevoUsuario["organizacion"], PDO::PARAM_STR);
            $pdo->bindParam("cargo", $datosNuevoUsuario["cargo"], PDO::PARAM_STR);
            $pdo->bindParam("telefono", $datosNuevoUsuario["telefono"], PDO::PARAM_STR);
            $pdo->bindParam("foto", $datosNuevoUsuario["foto"], PDO::PARAM_STR);
            $pdo->bindParam("rolid", $datosNuevoUsuario["rol"], PDO::PARAM_INT);

            if ($pdo->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }

    static public function editarRegistroUsuarioM($datosEditarUsuario)
    {
        try {
            if ($datosEditarUsuario != null) {
                $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.email, usuarios.organizacion, usuarios.cargo, usuarios.telefono, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.id = :id");
                $pdo->bindParam("id", $datosEditarUsuario, PDO::PARAM_INT);
                $pdo->execute();
                return $pdo->fetch();

            } else {
                $pdo = conexionBD::conexion()->prepare("SELECT usuarios.id, usuarios.usuario, usuarios.clave, usuarios.email, usuarios.organizacion, usuarios.cargo, usuarios.telefono, usuarios.foto, usuarios.rolid, catroles.catRolesDescripcion  FROM usuarios INNER JOIN catroles ON usuarios.rolid = catroles.rolid WHERE usuarios.id = :id");
                $pdo->bindParam("id", $datosEditarUsuario, PDO::PARAM_INT);
                $pdo->execute();
                return $pdo->fetchAll();
            }
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }

    static public function DesactivarRegistroUsuarioM($codigoUsuario)
    {
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE usuarios SET rolid = 3 WHERE id = :id");
            $pdo->bindParam("id", $codigoUsuario, PDO::PARAM_INT);
            if ($pdo->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }

    public static function actualizarRegistroUsuarioM($datosActualizarUsuario)
    {
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE usuarios SET usuario=:usuario, clave=:clave, email=:email, organizacion=:organizacion, cargo=:cargo, telefono=:telefono, foto=:foto, rolid=:rolid WHERE id=:id");
            $pdo->bindParam("id", $datosActualizarUsuario["id"], PDO::PARAM_STR);
            $pdo->bindParam("usuario", $datosActualizarUsuario["usuario"], PDO::PARAM_STR);
            $pdo->bindParam("clave", password_hash($datosActualizarUsuario["clave"], PASSWORD_DEFAULT), PDO::PARAM_STR);
            $pdo->bindParam("email", $datosActualizarUsuario["email"], PDO::PARAM_STR);
            $pdo->bindParam("organizacion", $datosActualizarUsuario["organizacion"], PDO::PARAM_STR);
            $pdo->bindParam("cargo", $datosActualizarUsuario["cargo"], PDO::PARAM_STR);
            $pdo->bindParam("telefono", $datosActualizarUsuario["telefono"], PDO::PARAM_STR);
            $pdo->bindParam("foto", $datosActualizarUsuario["foto"], PDO::PARAM_STR);
            $pdo->bindParam("rolid", $datosActualizarUsuario["rol"], PDO::PARAM_STR);

            if ($pdo->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Throwable) {
            notificationC::showNotification("Problemas con la conexion, contacte a biblioteca@tesorosdedios.org", "error");
        }
    }
}
?>
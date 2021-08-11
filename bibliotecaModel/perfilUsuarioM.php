<?php

require_once 'Admin/modelo/conexionBD.php';

class perfilUsuarioM extends conexionBD{
    public static function actualizaPerfilUsuarioM($datosActualizarUsuario){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE usuarios SET usuario=:usuario, clave=:clave, foto=:foto WHERE id=:id");
            $pdo -> bindParam("id",$datosActualizarUsuario["id"],PDO::PARAM_STR);
            $pdo -> bindParam("clave",$datosActualizarUsuario["clave"],PDO::PARAM_STR);
            $pdo -> bindParam("foto",$datosActualizarUsuario["foto"],PDO::PARAM_STR);
            
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
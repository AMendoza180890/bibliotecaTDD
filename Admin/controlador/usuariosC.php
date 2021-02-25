<?php

class usuariosC {

    public function ingresoUsuariosC(){
        try {
            if(isset($_POST["usuarioIngreso"])){
                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["passWord"])){
                    
                    $datosC = array("usuario" => $_POST["usuarioIngreso"], "clave" => $_POST["passWord"]);

                    $inicioSesion = usuariosM::ingresoSesionUsuario($datosC);

                    if ($inicioSesion["usuario"] == $_POST["usuarioIngreso"] && $inicioSesion["clave"] == $_POST["passWord"] && $inicioSesion["rolid"] == 1) {
                        $_SESSION["ingreso"] = true;
                        $_SESSION["id"] = $inicioSesion["id"];
                        $_SESSION["usuario"] = $inicioSesion["usuario"];
                        $_SESSION["clave"] = $inicioSesion["clave"];
                        $_SESSION["foto"] = $inicioSesion["foto"];
                        $_SESSION["rol"] = $inicioSesion["catRolesDescripcion"];

                        echo '<script>window.location = "index.php?ruta=inicio";</script>';

                    }else{
                        echo 'Error con el usuario o clave';
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Error - ". $ex;
        }
    }
}
?>
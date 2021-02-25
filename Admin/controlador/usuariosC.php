<?php

class usuariosC {

    public function ingresoUsuariosC(){
        try {
            if(isset($_POST["usuarioIngreso"])){
                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["passWord"])){
                    
                    $datosC = array("user" => $_POST["usuarioIngreso"], "pass" => $_POST["passWord"]);

                    $inicioSesion = usuariosM::ingresoSesionUsuario($datosC);

                    if ($inicioSesion["usuario"] ?? "default" == $_POST["usuarioIngreso"]) {
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
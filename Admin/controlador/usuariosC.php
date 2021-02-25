<?php

class usuariosC {

    public function ingresoUsuariosC(){
        try {
            if(isset($_POST["usuarioIngreso"])){
                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["passWord"])){
                    
                    $datosC = array("user" => $_POST["usuarioIngreso"], "pass" => $_POST["passWord"]);

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

    public function listadeUsuarios(){
        try {
            $listaUsuario = usuariosM::listadeUsuariosM();
            if($listaUsuario != 0){
                foreach ($listaUsuario as $key => $value) {
                    echo '<tr>
                    <td>'.$key.'</td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["clave"].'</td>
                    <td><img src="vista/img/usuario/defecto.png" class="user-image" width="40px" alt="User Image"></td>
                    <td>'.$value["catRolesDescripcion"].'</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
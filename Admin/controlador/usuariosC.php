<?php

class usuariosC {

    public function ingresoUsuariosC(){
        try {
            if(isset($_POST["usuarioIngreso"])){
                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["passWord"])){
                    
                    $datosC = array("user" => $_POST["usuarioIngreso"], "pass" => $_POST["passWord"]);

                    $inicioSesion = usuariosM::ingresoSesionUsuario($datosC);
                    
                    if ($inicioSesion) {
                        if ($inicioSesion["usuario"] == $_POST["usuarioIngreso"] && $inicioSesion["clave"] == $_POST["passWord"] && $inicioSesion["rolid"] == 1) {
                            $_SESSION["ingreso"] = true;
                            $_SESSION["id"] = $inicioSesion["id"];
                            $_SESSION["usuario"] = $inicioSesion["usuario"];
                            $_SESSION["clave"] = $inicioSesion["clave"];
                            $_SESSION["foto"] = $inicioSesion["foto"];
                            $_SESSION["rol"] = $inicioSesion["catRolesDescripcion"];
    
                            echo '<script>window.location = "index.php?ruta=inicio";</script>';
                        }
                    } else {
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
                    <td>'.($key +1).'</td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["clave"].'</td>';
                    if (is_null($value["foto"]) || $value["foto"] == "") {
                        echo '<td><img src="vista/img/usuario/defecto.png" class="user-image" width="40px" alt="User Image"></td>';
                    }else{
                        echo '<td><img src="'.$value["foto"].'" class="user-image" width="40px" alt="User Image"></td>';
                    }
                    echo '<td>'.$value["catRolesDescripcion"].'</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-success EditRegistroUsuario" codValor='.$value["id"]. '><i data-toggle="modal" data-target="#editarUsuario" class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger DesactivarRegistroUsuario" codValor=' . $value["id"] . '><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function registrarUsuariosC(){
        try {
                if(isset($_POST["usuarioNuevo"])){
                    // codigo de validacion de imagen
                    $rutaImagenProcesada = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoNuevo"]["tmp_name"], $_FILES["fotoNuevo"]);
                    $datosNuevoUsuario = array("usuario"=>$_POST["usuarioNuevo"],"clave"=>$_POST["claveNuevo"],"rol"=>$_POST["rolNuevo"],"foto"=>$rutaImagenProcesada);                  
                    $crearNuevoUsuario = usuariosM::registrarUsuariosM($datosNuevoUsuario);
                    if ($crearNuevoUsuario == true) {
                            echo '<script>window.location="index.php?ruta=catusuarios"</script>';
                    }else{
                            echo 'Error - Ocurrio un error al hora de insertar';
                    }
                }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function editarRegistroUsuarioC(){
        try {
           
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function DesactivarRegistroUsuarioC(){
        try {
            if ($_GET["codValor"] !== null){

                $codigoUsuario = $_GET["codValor"];

                echo '<script>console.log("entra en funcion desactivar '.$codigoUsuario.' ")</script>';

                //$desactivarRespuesta = usuariosM::DesactivarRegistroUsuarioM($codigoUsuario);
                
                // if ($desactivarRespuesta == true) {
                //     echo '<script>window.location=index.php?ruta=catusuario</script>';
                // }else{
                //     echo 'Hubo un error, favor reportarlo al administrador del sistema';
                // }
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
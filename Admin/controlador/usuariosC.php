<?php
class usuariosC
{
    //Se encarga de consultar la informacion para el inicio de sesion del sistema
    public function ingresoUsuariosC()
    {
        try {
            if (isset($_POST["usuarioIngreso"])) {
                if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["passWord"])) {

                    $datosC = array("user" => $_POST["usuarioIngreso"]);
                    $inicioSesion = usuariosM::ingresoSesionUsuario($datosC);
                    if ($inicioSesion) {
                        if (password_verify($_POST["passWord"], $inicioSesion["clave"]) && $inicioSesion["rolid"] == 1) {
                            $_SESSION["ingreso"] = true;
                            $_SESSION["id"] = $inicioSesion["id"];
                            $_SESSION["usuario"] = $inicioSesion["usuario"];
                            $_SESSION["clave"] = $inicioSesion["clave"];
                            $_SESSION["foto"] = $inicioSesion["foto"];
                            $_SESSION["rol"] = $inicioSesion["catRolesDescripcion"];

                            echo '<script>window.location = "inicio";</script>';
                        } else {
                            echo 'Error con el usuario o clave';
                        }
                    } else {
                        echo 'Error con el usuario o clave';
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Error - " . $ex;
        }
    }
    // Enlista a los usuario y los muestra en la tabla de usuario en el Admin.
    public function listadeUsuarios()
    {
        try {
            $listaUsuario = usuariosM::listadeUsuariosM();
            if ($listaUsuario != 0) {
                foreach ($listaUsuario as $key => $value) {
                    echo '<tr>
                    <td>' . ($key + 1) . '</td>
                    <td>' . $value["usuario"] . '</td>
                    <td> <a href="mailto:' . $value["email"] . '">' . $value["email"] . '</a></td>
                    <td>' . $value["organizacion"] . '</td>
                    <td>' . $value["cargo"] . '</td>
                    <td> <a href="tel:' . $value["telefono"] . '">' . $value["telefono"] . '</a></td>';
                    if (is_null($value["foto"]) || $value["foto"] == "") {
                        echo '<td><img src="vista/img/usuario/defecto.png" class="user-image" width="40px" alt="User Image"></td>';
                    } else {
                        echo '<td><img src="' . $value["foto"] . '" class="user-image" width="40px" alt="User Image"></td>';
                    }
                    echo '<td>' . $value["catRolesDescripcion"] . '</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-success EditRegistroUsuario" codValor=' . $value["id"] . '><i data-toggle="modal" data-target="#editarUsuario" class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger DesactivarRegistroUsuario" codValor=' . $value["id"] . '><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
    //Registra a un usuario, Se encarga de guardar todoa la informacion en la base de datos.
    //Aun se necesita modificar la base de datos para que no se encuentre la contrase;a en la misma tabla.
    public function registrarUsuariosC()
    {
        try {
            if (isset($_POST["usuarioNuevo"])) {
                // codigo de validacion de imagen
                $rutaImagenProcesada = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoNuevo"]["tmp_name"], $_FILES["fotoNuevo"]);

                $datosNuevoUsuario = array("usuario" => $_POST["usuarioNuevo"], "clave" => $_POST["claveNuevo"], "email" => $_POST["email"], "organizacion" => $_POST["organizacion"], "cargo" => $_POST["cargo"], "telefono" => $_POST["telefono"], "rol" => $_POST["rolNuevo"], "foto" => $rutaImagenProcesada);

                $crearNuevoUsuario = usuariosM::registrarUsuariosM($datosNuevoUsuario);
                if ($crearNuevoUsuario == true) {
                    echo '<script>window.location="catusuarios"</script>';
                } else {
                    echo 'Error - Ocurrio un error al hora de insertar';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
    // Esta funcion es para obtener informacion del usuario usuando jquery y ajax, consulta a la base de datos.
    // Luego se envia al .js para poder colocar la informacion en los campos del formulario.
    public static function editarRegistroUsuarioC($valor)
    {
        try {
            $editarUsuario = usuariosM::editarRegistroUsuarioM($valor);
            return $editarUsuario;
        } catch (Exception $ex) {
            echo 'Error -' . $ex;
        }
    }
    // Se encarga de actualizar la informacion del usuario en la base de datos.
    // Con los datos cargados en el formulario.
    public function actualizarRegistroUsuarioC()
    {
        try {
            if (isset($_POST["idEdit"])) {
                $rutaImagen = $_POST["fotoActual"];
                if ($_FILES["fotoEdit"]["tmp_name"] != "") {
                    $rutaImagen = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoEdit"]["tmp_name"], $_FILES["fotoEdit"]);
                }
                $datosActualizarUsuario = array("id" => $_POST["idEdit"], "usuario" => $_POST["usuarioEdit"], "clave" => $_POST["claveEdit"], "email" => $_POST["emailEdit"], "organizacion" => $_POST["organizacionEdit"], "cargo" => $_POST["cargoEdit"], "telefono" => $_POST["telefonoEdit"], "rol" => $_POST["rolEdit"], "foto" => $rutaImagen);

                $datosActualizados = usuariosM::actualizarRegistroUsuarioM($datosActualizarUsuario);

                if ($datosActualizados == true) {
                    echo '<script>window.location = "catusuarios"</script>';
                } else {
                    echo 'Hay un error no se pudo realizar actualizacion';
                }
            }
        } catch (exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
    // Se desactiva el usuario en la base de datos, nunca se elimina la informacion
    // Se traslada a estado de DESACTIVADO.
    public function DesactivarUsuarioC()
    {
        try {
            if (isset($_GET["CodValor"])) {
                $codigoUsuario = $_GET["CodValor"];
                $RespuestadesactivarUsuario = usuariosM::DesactivarRegistroUsuarioM($codigoUsuario);
                if ($RespuestadesactivarUsuario == true) {
                    echo '<script>window.location="catusuarios"</script>';
                } else {
                    echo 'Hubo un error, favor reportarlo al administrador del sistema';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
}

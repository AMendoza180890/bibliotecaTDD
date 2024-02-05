<?php
class usuarioBibliotecaC
{
    public function inciarSesionBibliotecaC()
    {
        try {
            if (isset($_POST["usuarioBiblioteca"])) {
                if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioBiblioteca"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwBiblioteca"])) {
                    $datosUsuario = array("usuario" => $_POST["usuarioBiblioteca"], "passw" => $_POST["passwBiblioteca"]);
                    $datosUsuarioLogin = usuarioBibliotecaM::iniciarSesionBibliotecaM($datosUsuario);
                    if ($datosUsuarioLogin) {
                        if (password_verify($_POST["passwBiblioteca"], $datosUsuarioLogin["clave"]) && ($datosUsuarioLogin["rolid"] == 1 || $datosUsuarioLogin["rolid"] == 2)) {
                            if ($datosUsuarioLogin["rolid"] == 1 || $datosUsuarioLogin["rolid"] == 2) {
                                $_SESSION["ingreso"] = true;
                                $_SESSION["id"] = $datosUsuarioLogin["id"];
                                $_SESSION["usuario"] = $datosUsuarioLogin["usuario"];
                                $_SESSION["clave"] = $datosUsuarioLogin["clave"];
                                $_SESSION["foto"] = $datosUsuarioLogin["foto"];
                                $_SESSION["rol"] = $datosUsuarioLogin["catRolesDescripcion"];

                                echo '<script>window.location = "home"</script>';
                            }
                        }
                    } else {
                        echo 'Error con el usuario o clave';
                    }
                }
            }
        } catch (Exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
}

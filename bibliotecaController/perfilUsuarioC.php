<?php
class perfilUsuarioC{
    public function actualizarPerfilUsuarioC(){
        try {
            $id         = $_SESSION['id'];
            $clave      = $_SESSION["clave"];
            $rutaImagen = $_SESSION['foto'];

         if (isset($_POST["claveEditPerfil"]) || !empty($_FILES["fotoEditPerfil"]["tmp_name"])) {
                if (isset($_POST["claveEditPerfil"])) {
                    if ($_POST["claveEditPerfil"] === $_SESSION["clave"]) {
                        if (!empty($_POST["claveNuevaEditPerfil"])) {
                            $clave = $_POST["claveNuevaEditPerfil"];
                        }
                    }
                }

                if (!empty($_FILES["fotoEditPerfil"]["tmp_name"])) {
                    $nombreImagen = tratamientoImagenPerfil::tratamientoTipoImagenPerfil($_FILES["fotoEditPerfil"]["tmp_name"], $_FILES["fotoEditPerfil"]);
                    $rutaImagen = "vista/img/usuario/U" . $nombreImagen;
                }

                $datosActualizarPefilUsuario = array("id" => $id, "clave" => $clave, "foto" => $rutaImagen);

                $datosActualizados = perfilUsuarioM::actualizaPerfilUsuarioM($datosActualizarPefilUsuario);

                if ($datosActualizados == true) {
                    echo '<script>window.location = ' . $_SERVER['PHP_SELF'] . ';</script>';
                } else {
                    echo 'Hay un error no se pudo realizar actualizacion';
                }
         }  
            
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
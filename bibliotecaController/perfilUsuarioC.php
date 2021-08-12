<?php
require_once 'Admin/controlador/tratamientoImagen.php';
class perfilUsuarioC{
    public function actualizarPerfilUsuarioC(){
        try {
            if (isset($_POST["claveEditPerfil"])) {
                $rutaImagen = $_SESSION['foto'];
                if ($_FILES["fotoEditPerfil"]["tmp_name"] != "") {
                    $rutaGuardar = "Admin/vista/img/usuario/U";
                    $rutaImagen = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoEditPerfil"]["tmp_name"], $_FILES["fotoEditPerfil"], $rutaGuardar);
                }
                $datosActualizarPefilUsuario = array("id"=>$_SESSION['id'],"clave"=>$_POST["claveEditPerfil"],"foto"=>$rutaImagen);

                $datosActualizados = perfilUsuarioM::actualizaPerfilUsuarioM($datosActualizarPefilUsuario);

                if($datosActualizados == true){
                    echo '<script>location.reload();</script>';
                }else{
                    echo 'Hay un error no se pudo realizar actualizacion';
                }
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
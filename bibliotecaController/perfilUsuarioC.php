<?php
class perfilUsuarioC{
    public function actualizarPerfilUsuarioC(){
        try {
            if (isset($_POST["idEdit"])) {
                $rutaImagen = $_SESSION['foto'];
                if ($_FILES["fotoEditPerfil"]["tmp_name"] != "") {
                    $rutaImagen = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoEditPerfil"]["tmp_name"], $_FILES["fotoEditPerfil"]);
                }
                $datosActualizarUsuario = array("id"=>$_SESSION['id'],"clave"=>$_POST["claveEditPerfil"],"foto"=>$rutaImagen);

                $datosActualizados = usuariosM::actualizarRegistroUsuarioM($datosActualizarUsuario);

                if($datosActualizados == true){
                    echo '<script>window.location.reload();</script>';
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
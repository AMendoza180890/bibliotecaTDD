<?php

require_once '../controlador/usuariosC.php';
require_once '../modelo/usuariosM.php';

class usuariosAjax{
    public $id;

    public function usuarioEditA(){
        $valor = $this->id;
        $editarUsuario = usuariosC::editarRegistroUsuarioC($valor);
        echo json_encode($editarUsuario);
    }
}

if (isset($_POST["id"])) {
    $editarUsuario = new usuariosAjax;
    $editarUsuario -> id = $_POST["id"];
    $editarUsuario -> usuarioEditA();
}

?>
<?php
require_once '../../vendor/autoload.php';
require_once '../controlador/usuariosC.php';
require_once '../modelo/usuariosM.php';
require_once '../src/notification.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

class usuariosAjax
{
    public $id;
    public function usuarioEditA()
    {
        try {
            $valor = $this->id;
            $editarUsuario = usuariosC::editarRegistroUsuarioC($valor);
            echo json_encode($editarUsuario);
        } catch (Exception $ex) {
            notificationC::showNotification("Error al recuperar informacion del usuario$ex" ,'error');
        }
    }

    // public static function setRolEditA($id){
    //      try {
    //         $roles = rolesUsuarioC::setRolesUsuarioC($id);
    //      } catch (Exception $ex) {
    //         echo 'Error - '.$ex;
    //      }
    //  }
}

if (isset($_POST["id"])) {
    $editarUsuario = new usuariosAjax;
    $editarUsuario->id = $_POST["id"];
    $editarUsuario->usuarioEditA();
    // usuariosAjax::setRolEditA($_POST["id"]);
}

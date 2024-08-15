<?php
require_once '../vendor/autoload.php';
require_once '../bibliotecaController/recursoBibliotecaC.php';
require_once '../bibliotecaModel/recursosverBibliotecaM.php';
require_once '../Admin/src/notification.php';

use Dotenv\Dotenv;

//$dotenv = Dotenv::createImmutable(__DIR__)->load();
$dotenv = Dotenv::createImmutable("./")->load();

class recursosbiblitecaA
{
    public $codigo;

    public function obtenerDatosRecurso()
    {
        try {
            $id = $this->codigo;
            $obtenerVerRecursos = recursoBibliotecaC::verRecursoC($id);
            echo json_encode($obtenerVerRecursos);
        } catch (Exception $ex) {
            notificationC::showNotification("Error al obtener datos Recursos", "error");
        }
    }
}

if (isset($_POST["codRecurso"])) {
    $recurso = new recursosbiblitecaA();
    $recurso->codigo = $_POST["codRecurso"];
    $recurso->obtenerDatosRecurso();
}

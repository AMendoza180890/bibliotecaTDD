<?php
require_once '../../vendor/autoload.php';
require_once '../controlador/recursosC.php';
require_once '../modelo/recursosM.php';
require_once '../src/notification.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

class obtenerRecursoA
{
    public $idRecurso;
    public function transacObtenerRecursoA()
    {
        try {
            $id = $this->idRecurso;
            $datosRecurso = recursoC::obtenerRecursoRegistradoC($id);
            echo json_encode($datosRecurso);
        } catch (exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
}

if (isset($_POST["idRecurso"])) {
    $obtenerRecurso = new obtenerRecursoA;
    $obtenerRecurso->idRecurso = $_POST["idRecurso"];
    $obtenerRecurso->transacObtenerRecursoA();
}

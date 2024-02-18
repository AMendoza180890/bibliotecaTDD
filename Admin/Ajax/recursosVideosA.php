<?php
require_once '../vendor/autoload.php';
include_once '../controlador/recursosVideosC.php';
include_once '../modelo/recursosVideosM.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

class obtenerRecursoVideoA
{
    public $idRecurso;
    public function transacObtenerRecursoVideoA()
    {
        try {
            $id = $this->idRecurso;
            $datosRecurso = recursoVideosC::obtenerRecursoRegistradoVideoC($id);
            echo json_encode($datosRecurso);
        } catch (exception $ex) {
            echo 'Error - ' . $ex;
        }
    }
}

if (isset($_POST["idRecurso"])) {
    $obtenerRecurso = new obtenerRecursoVideoA;
    $obtenerRecurso->idRecurso = $_POST["idRecurso"];
    $obtenerRecurso->transacObtenerRecursoVideoA();
}

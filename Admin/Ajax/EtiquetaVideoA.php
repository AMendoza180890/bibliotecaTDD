<?php
require_once '../../vendor/autoload.php';
require_once '../controlador/recursosVideosC.php';
require_once '../modelo/recursosVideosM.php';
require_once '../src/notification.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

class obtenerRecursoEtiquetaVideoA
{
    public $idRecurso;
    public function transacObtenerEtiquetasRecursoVideo()
    {
        try {
            $id = $this->idRecurso;
            $datosEtiquetaRecurso = recursoVideosC::obtenerEtiquetaRecursoVideoC($id);
            echo json_encode($datosEtiquetaRecurso);
        } catch (exception $ex) {
            echo 'Error -' . $ex;
        }
    }
}

if (isset($_POST["idRecurso"])) {
    $obtenerRecurso = new obtenerRecursoEtiquetaVideoA;
    $obtenerRecurso->idRecurso = $_POST["idRecurso"];
    $obtenerRecurso->transacObtenerEtiquetasRecursoVideo();
}

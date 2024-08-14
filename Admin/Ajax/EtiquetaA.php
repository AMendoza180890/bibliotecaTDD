<?php
require_once '../../vendor/autoload.php';
require_once '../controlador/recursosC.php';
require_once '../modelo/recursosM.php';
require_once '../src/notification.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

class obtenerRecursoEtiquetaA
{
    public $idRecurso;
    public function transacObtenerEtiquetasRecurso()
    {
        try {
            $id = $this->idRecurso;
            $datosEtiquetaRecurso = recursoC::obtenerEtiquetaRecursoC($id);
            echo json_encode($datosEtiquetaRecurso);
        } catch (exception $ex) {
            notificationC::showNotification('No pudo cargar informacion sobre las etiquetas','error');
        }
    }
}

if (isset($_POST["idRecurso"])) {
    $obtenerRecurso = new obtenerRecursoEtiquetaA;
    $obtenerRecurso->idRecurso = $_POST["idRecurso"];
    $obtenerRecurso->transacObtenerEtiquetasRecurso();
}

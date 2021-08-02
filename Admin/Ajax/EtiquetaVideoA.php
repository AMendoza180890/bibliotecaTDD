<?php
include_once '../controlador/recursosVideosC.php';
include_once '../modelo/recursosVideosM.php';

class obtenerRecursoEtiquetaVideoA{
    public $idRecurso;
    public function transacObtenerEtiquetasRecursoVideo(){
        try {
            $id = $this->idRecurso;
            $datosEtiquetaRecurso = recursoVideosC::obtenerEtiquetaRecursoVideoC($id);
            echo json_encode($datosEtiquetaRecurso);
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}

    if (isset($_POST["idRecurso"])) {
        $obtenerRecurso = new obtenerRecursoEtiquetaVideoA;
        $obtenerRecurso -> idRecurso = $_POST["idRecurso"];
        $obtenerRecurso -> transacObtenerEtiquetasRecursoVideo();
    }
?>
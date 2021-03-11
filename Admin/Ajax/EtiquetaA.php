<?php
include_once '../controlador/recursosC.php';
include_once '../modelo/recursosM.php';

class obtenerRecursoEtiquetaA{
    public $idRecurso;
    public function transacObtenerEtiquetasRecurso(){
        try {
            $id = $this->idRecurso;
            $datosEtiquetaRecurso = recursoC::obtenerEtiquetaRecursoC($id);
            echo json_encode($datosEtiquetaRecurso);
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}

    if (isset($_POST["idRecurso"])) {
        $obtenerRecurso = new obtenerRecursoEtiquetaA;
        $obtenerRecurso -> idRecurso = $_POST["idRecurso"];
        $obtenerRecurso -> transacObtenerEtiquetasRecurso();
    }
?>
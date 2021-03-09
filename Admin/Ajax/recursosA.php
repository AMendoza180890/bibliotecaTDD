<?php
include_once '../controlador/recursosC.php';
include_once '../modelo/recursosM.php';

class obtenerRecursoA{
    public $idRecurso;
    public function transacObtenerRecursoA(){
        try {
            $id = $this->idRecurso;
            $datosRecurso = recursoC::obtenerRecursoRegistradoC($id);
            echo json_encode($datosRecurso);
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}

    if (isset($_POST["idRecurso"])) {
        $obtenerRecurso = new obtenerRecursoA;
        $obtenerRecurso -> idRecurso = $_POST["idRecurso"];
        $obtenerRecurso -> transacObtenerRecursoA();
    }
?>
<?php
require_once '../vendor/autoload.php';
require_once '../bibliotecaController/recursoBibliotecaC.php';
require_once '../bibliotecaModel/recursosverBibliotecaM.php';

class recursosbiblitecaA
{
    public $codigo;

    public function obtenerDatosRecurso()
    {
        $id = $this->codigo;

        $obtenerVerRecursos = recursoBibliotecaC::verRecursoC($id);
        echo json_encode($obtenerVerRecursos);
    }
}

if (isset($_POST["codRecurso"])) {
    $recurso = new recursosbiblitecaA();
    $recurso->codigo = $_POST["codRecurso"];
    $recurso->obtenerDatosRecurso();
}

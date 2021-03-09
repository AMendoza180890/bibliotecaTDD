<?php
class recursoBibliotecaC{
    public function obtenerRecursoC($Etiquetaid){
        try {
            $obtenerListaRecurso = recursoBibliotecaM::obtenerRecursoM($Etiquetaid);

            foreach ($obtenerListaRecurso as $key => $value) {
                //se rellenara la lista desde aqui
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
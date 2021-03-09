<?php
class etiquetasC{
    public function listaEtiquetaC(){
        try {
            $listaEtiquetaRecurso = etiquetasM::listaEtiquetasM();

            foreach ($listaEtiquetaRecurso as $key => $value) {
                echo '<option value="'.$value["id"].'">'.$value["etiquetaDescripcion"].'</option>';
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
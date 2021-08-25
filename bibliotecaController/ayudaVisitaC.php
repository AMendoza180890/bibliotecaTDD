<?php
class ayudaVisitaController
{
    public function cargarInfoAyudaC()
    {
        try {
            $informacionAyuda = ayudaVisitaModel::cargarInfoAyudaM();

            echo '<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">'.$informacionAyuda["titulo"].'</h4>
                        </div>
                        <div class="modal-body">
                            '.$informacionAyuda["descripcion"].'
                        </div>';
        } catch (exception $ex) {
            echo 'error: ' . $ex->getMessage();
        }
    }

    public function estadoInfoAyudaC()
    {
        try {
            $informacionAyuda = ayudaVisitaModel::cargarInfoAyudaM();

            if ($informacionAyuda["estado"] == 1) {
                echo '<li  class="tooltips-general btn-help" data-placement="bottom" title="Información">
                         <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                     </li>';
            } else {
                echo '<li  class="tooltips-general btn-help" data-placement="bottom" style="display:none;" title="Información">
                     <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                 </li>';
            }
        } catch (exception $ex) {
            echo 'error: ' . $ex->getMessage();
        }
    }
}

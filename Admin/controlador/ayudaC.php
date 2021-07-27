<?php
    class ayudaController{
        public function mostrarAyudaC(){
            try {
                $obtenerInformacionDeAyuda = ayudaModel::mostrarAyudaM();
                
                echo '';

            } catch (exception $ex) {
                echo 'error:'.$ex->getMessage();
            }
        }

        public function insertarAyudaC()
        {
            try {
                $obtenerInformacionDeAyuda = ayudaModel::insertarAyudaM();

                echo '';
            } catch (exception $ex) {
                echo 'error:' . $ex->getMessage();
            }
        }

        public function actualizarAyudaC()
        {
            try {

            } catch (exception $ex) {
                echo 'error:' . $ex->getMessage();
            }
        }

        public function desabilitarAyudaC()
        {
            try {

            } catch (exception $ex) {
                echo 'error:' . $ex->getMessage();
            }
        }
    }
?>
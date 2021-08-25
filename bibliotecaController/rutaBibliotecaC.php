<?php
class rutaRecursoBibliotecaC{
    public function obtenerRutaEtiquetaC(){
        try {
            if(isset($_GET["ruta"])){
                $ruta = $_GET["ruta"];
                $obtenerInformacion = rutaRecursoBibliotecaM::obtenerRutaEtiquetaM($ruta);
                
                if (!empty($obtenerInformacion)) {                       
                    include 'bibliotecaView/view/' . $obtenerInformacion["nombrePaginaTipo"] . ".php";
                } else{
                    include 'bibliotecaView/view/home.php';
                }
            }
        } catch (exception $ex) {
            echo $ex->getMessage();
        }
    }
}
?>
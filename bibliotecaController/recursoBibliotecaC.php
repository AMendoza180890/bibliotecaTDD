<?php
class recursoBibliotecaC{
    public function obtenerCodigoEtiquetaC(){
        try {
            if(isset($_GET["ruta"])){
                $ruta = $_GET["ruta"];
                $obtenerInformacion = recursoBibliotecaM::obtenerCodigoEtiquetaM($ruta);
                
                if (!empty($obtenerInformacion)) {
                    $CodigoEtiqueta = $obtenerInformacion["id"];
                    $DescripcionEtiqueta = $obtenerInformacion["etiquetaDescripcion"];
                    $recursosPorEtiquetas = new recursoBibliotecaC;
                    $recursosPorEtiquetas ->  obtenerRecursoC($CodigoEtiqueta, $DescripcionEtiqueta);
                    //echo '<script> Console.log("'.var_dump($obtenerInformacion).'")</script>';
                } else{
                    echo '<script> console.log("'.'Error al cargar la pagina web'. var_dump($obtenerInformacion).$_GET["ruta"].'")</script>';
                }
            }
        } catch (exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function obtenerRecursoC($Etiquetaid, $DescripcionEtiqueta = ""){
        try {
            $obtenerListaRecurso = recursoBibliotecaM::obtenerRecursoM($Etiquetaid);
                echo '
                <div class="page-header">
                    <h2 class="all-tittles">Recursos '. $DescripcionEtiqueta.'</h2>
                </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="text-center all-tittles">'.$DescripcionEtiqueta.'</h3>
                        <div class="table-responsive">
                            <table class="table table-hover text-center tbl">
                        <thead>
                                <tr class="success">
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Descripcion</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Archivo</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                                <tbody>';
            foreach ($obtenerListaRecurso as $key => $value) {
                        echo '<tr>
                                <td>'.$value["titulo"].'</td>
                                <td>'.$value["descripcion"].'</td>
                                <td>'.$value["autor"].'</td>
                                <td>'.$value["tipo"].'</td>
                                <td> 
                                    <div class="btn-group">
                                        <a href="Admin/'.$value["ruta"].'" download="'.$value["titulo"].'"" class="btn btn-primary">Descargar</a>
                                        <a href="#" id="'.$value["id"].'" idetiqueta="'.$Etiquetaid.'" data-toggle="modal" data-target="#verRecurso" class="btn btn-info btnVer">ver</a>
                                    </div>
                                </td>
                            </tr>';
            }
                echo '</table>
                </tbody>
            </div>
        </div>';
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function verRecursoC($codigo){
        try {
            if ($codigo != null) {
                $obtenerVerRecursos = recursoverBibliotecaM::verRecursoM($codigo);
                return $obtenerVerRecursos;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
<?php
class recursoVideosC{
    public function mostrarRecursosVideoRegistrados(){
        try {
            $mostrarRecurso =  recursoVideosM::mostrarRecursoVideoM();
            if ($mostrarRecurso != 0) {
                foreach ($mostrarRecurso as $key => $value) {
                    echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $value["titulo"] . '</td>
                        <td>' . $value["autor"] . '</td>
                        <td>' . $value["nombre"] . '</td>
                        <td>'.$value["descripcion"].'</td>
                        <td>' . $value["link"] . '</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-success EditRegistroRecursoVideo" codValor=' . $value["id"] . '><i data-toggle="modal" data-target="#editarRecursoVideo" class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger DesactivarRegistroUsuario" style="display:none;" codValor=' . $value["id"] . '><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>';
                }
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function registrarVideoRecurso(){
        try {
            if (isset($_POST["titulosNuevo"])) {
               
                $datosRecurso = array( "link"=>$_POST["linkNuevo"], "titulo"=>$_POST["titulosNuevo"], "detalle"=>$_POST["detallesNuevo"], "autor" =>$_POST["autorNuevo"], "resumen"=>$_POST["resumenNuevo"]);

                $registrarRecurso = recursoVideosM::registrarRecursoVideoM($datosRecurso);

                if ($registrarRecurso == true) {
                    echo '<script>window.location="recursoVideo"</script>';
                }else {
                    echo 'No se pudo registrar el recurso';
                }

            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function obtenerRecursoRegistradoVideoC($codigoRecurso){
        try {
            if ($codigoRecurso != null) {
                $obtenerRecurso = recursoVideosM::obtenerRecursoRegistradoVideoM($codigoRecurso);
                return $obtenerRecurso;
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function obtenerEtiquetaRecursoVideoC($codigoRecurso){
        try {
            if ($codigoRecurso != null) {
                $recursoEtiqueta = recursoVideosM::obtenerEtiquetaRecursoVideo($codigoRecurso);
                return $recursoEtiqueta;
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function actualizarRecursoVideo(){
        try {
            if (isset($_POST["idEdit"])) {
    
                $datosRecursoActualizado = array("id" => $_POST["idEdit"],"titulo"=>$_POST["titulosEdit"],"detalle"=>$_POST["detallesEdit"],"link"=>$_POST["linkEdit"],
                "autor"=>$_POST["autorEdit"], "resumen" => $_POST["resumenEditado"] );

                $datosActualizados = recursoVideosM::actualizarRecursoVideoM($datosRecursoActualizado);

                if ($datosActualizados == true) {
                    echo '<script>window.location="recursoVideo"</script>';
                }else{
                    echo 'Error al actualizar recurso';
                }
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function asignarEtiquetasRecursoVideo(){
        try {
            $id = "";
            $opcion1 = 14;
            $opcion2 = 14;
            $opcion3 = 14;
            $opcion4 = 14;
            $opcion5 = 14;
            $opcion6 = 14;
            $opcion7 = 14;
            $opcion8 = 14;
            $opcion9 = 14;
            $opcion10 = 14;
            $opcion11 = 13;

            if(isset($_POST["idEdit"])){
                $id = $_POST["idEdit"];
                if(isset($_POST["opcion1"])){
                    $opcion1 = $_POST["opcion1"];
                }
                if(isset($_POST["opcion2"])){
                    $opcion2 = $_POST["opcion2"];
                }
                if(isset($_POST["opcion3"])){
                    $opcion3 = $_POST["opcion3"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion4 = $_POST["opcion4"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion5 = $_POST["opcion5"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion6 = $_POST["opcion6"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion7 = $_POST["opcion7"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion8 = $_POST["opcion8"];
                }
                if(isset($_POST["opcion1"])){
                    $opcion9 = $_POST["opcion9"];
                }
                if(isset($_POST["opcion10"])){
                    $opcion10 = $_POST["opcion10"];
                }

                $eliminarAsignadoEtiqueta = new recursoVideosM;
                $eliminarAsignadoEtiqueta -> eliminarEtiquetasVideos($id);

                $etiquetasAsignadas = array($opcion1,$opcion2,$opcion3, $opcion4, $opcion5, $opcion6, $opcion7, $opcion8, $opcion9, $opcion10, $opcion11);
                for ($i=0; $i < count($etiquetasAsignadas) ; $i++) {
                    if(isset($etiquetasAsignadas[$i]) && $etiquetasAsignadas[$i] != ""){
                        $recursoAsignadoEtiqueta = new recursoVideosM;
                        $recursoAsignadoEtiqueta -> asignarEtiquetasVideos($etiquetasAsignadas[$i],$id);
                    }
                }
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
<?php
class recursoVideosC{
    public function mostrarRecursosVideoRegistrados(){
        try {
            $mostrarRecurso =  recursoVideosM::mostrarRecursoVideoM();
            if ($mostrarRecurso != 0) {
                foreach ($mostrarRecurso as $key => $value) {
                    echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $value["link"] . '</td>
                        <td>' . $value["nombre"] . '</td>
                        <td>' . $value["titulo"] . '</td>
                        <td>'.$value["descripcion"].'</td>
                        <td>' . $value["autor"] . '</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-success EditRegistroRecurso" codValor=' . $value["id"] . '><i data-toggle="modal" data-target="#editarRecurso" class="fa fa-pencil"></i></button>
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
               
                $datosRecurso = array( "link"=>$_POST["linkNuevo"], "titulo"=>$_POST["titulosNuevo"], "detalle"=>$_POST["detallesNuevo"], "autor" =>$_POST["autorNuevo"], "tipoArchivo"=>$_POST["tipoN"], "resumenN"=>$_POST["resumenNuevo"]);

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

    // public static function obtenerEtiquetaRecursoVideoC($codigoRecurso){
    //     try {
    //         if ($codigoRecurso != null) {
    //             $recursoEtiqueta = recursoVideosM::obtenerEtiquetaRecurso($codigoRecurso);
    //             return $recursoEtiqueta;
    //         }
    //     } catch (exception $ex) {
    //         echo 'Error - '.$ex;
    //     }
    // }

    public function actualizarRecursoVideo(){
        try {
            if (isset($_POST["idEdit"])) {
                if ($_FILES["recursoEdit"]["tmp_name"] != "") {
                    $rutaRecurso = tratamientoRecurso::subirRecurso($_FILES["recursoEdit"]["tmp_name"], $_FILES["recursoEdit"]["name"]);
                    $nombreRecurso = basename($_FILES["recursoEdit"]["name"]);
                }else{
                    $rutaRecurso = $_POST["recursoActual"];
                    $nombreRecurso = basename($_POST["recursoActual"]);
                }

                $datosRecursoActualizado = array("id" => $_POST["idEdit"],"nombre"=>$nombreRecurso, "titulo"=>$_POST["titulosEdit"],"detalle"=>$_POST["detallesEdit"],"autor"=>$_POST["autorEdit"], "ruta" => $rutaRecurso, "tipoArchivoEditado"=>$_POST["tipoE"], "resumenEditado" => $_POST["resumenEditado"] );

                $datosActualizados = recursoVideosM::actualizarRecursoVideoM($datosRecursoActualizado);

                if ($datosActualizados == true) {
                    echo '<script>window.location="recurso"</script>';
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
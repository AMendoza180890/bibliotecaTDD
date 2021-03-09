<?php
class recursoC{
    public function mostrarRecursosRegistrados(){
        try {
            $mostrarRecurso =  recursoM::mostrarRecursoM();
            if ($mostrarRecurso != 0) {
                foreach ($mostrarRecurso as $key => $value) {
                    echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $value["ruta"] . '</td>
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

    public function registrarRecurso(){
        try {
            if (isset($_POST["titulosNuevo"])) {
                $rutaRecurso = tratamientoRecurso::subirRecurso($_FILES["recursoNuevo"]["tmp_name"],$_FILES["recursoNuevo"]["name"]);
                $nombreRecurso = basename($_FILES["recursoNuevo"]["name"]);

                $datosRecurso = array("nombreArchivo"=>$nombreRecurso, "ruta"=>$rutaRecurso, "titulo"=>$_POST["titulosNuevo"], "detalle"=>$_POST["detallesNuevo"], "autor" =>$_POST["autorNuevo"]);
                // echo '<script>console.log("'.$rutaRecurso.'")</script>';
                //"opcion1" => $_POST["rolNuevo1"],"opcion2" => $_POST["rolNuevo2"], "opcion3" => $_POST["rolNuevo3"], "opcion4" => $_POST["rolNuevo4"], "opcion5" => $_POST["rolNuevo5"], "opcion6" => $_POST["rolNuevo6"], "opcion7" => $_POST["rolNuevo7"], "opcion8" => $_POST["rolNuevo8"], "opcion9" => $_POST["rolNuevo9"],"opcion10" => $_POST["rolNuevo10"]

                $registrarRecurso = recursoM::registrarRecursoM($datosRecurso);

                if ($registrarRecurso == true) {
                    echo '<script>window.location="recurso"</script>';
                }else {
                    echo 'No se pudo registrar el recurso';
                }

            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function obtenerRecursoRegistradoC($codigoRecurso){
        try {
            if ($codigoRecurso != null) {
                $obtenerRecurso = recursoM::obtenerRecursoRegistradoM($codigoRecurso);
                return $obtenerRecurso;
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function actualizarRecurso(){
        try {
            if (isset($_POST["idEdit"])) {
                if ($_FILES["recursoEdit"]["tmp_name"] != "") {
                    $rutaRecurso = tratamientoRecurso::subirRecurso($_FILES["recursoEdit"]["tmp_name"], $_FILES["recursoEdit"]["name"]);
                    $nombreRecurso = basename($_FILES["recursoEdit"]["name"]);
                }else{
                    $rutaRecurso = $_POST["recursoActual"];
                    $nombreRecurso = basename($_POST["recursoActual"]);
                }

                $datosRecursoActualizado = array("id" => $_POST["idEdit"],"nombre"=>$nombreRecurso, "titulo"=>$_POST["titulosEdit"],"detalle"=>$_POST["detallesEdit"],"autor"=>$_POST["autorEdit"], "ruta" => $rutaRecurso);

                $datosActualizados = recursoM::actualizarRecursoM($datosRecursoActualizado);

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

    public function asignarEtiquetas(){
        try {
            
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
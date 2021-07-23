<?php
class recursoBibliotecaC{
    public function obtenerRecursoC($Etiquetaid){
        try {
            $obtenerListaRecurso = recursoBibliotecaM::obtenerRecursoM($Etiquetaid);

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
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function verRecursoC($codigo){
        try {
            if ($codigo != null) {
                $obtenerVerRecursos = recursoBibliotecaM::verRecursoM($codigo);
                return $obtenerVerRecursos;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
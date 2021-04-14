<?php
class recursoBibliotecaC{
    public function obtenerRecursoC($Etiquetaid){
        try {
            $obtenerListaRecurso = recursoBibliotecaM::obtenerRecursoM($Etiquetaid);

            foreach ($obtenerListaRecurso as $key => $value) {
               echo '<tr>
               <td>'.$value["nombre"].'</td>
               <td>'.$value["titulo"].'</td>
               <td>'.$value["descripcion"].'</td>
               <td>'.$value["autor"].'</td>
               <td> <a href="Admin/'.$value["ruta"].'" class="btn btn-primary">Descargar</a></td>
                </tr>';
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
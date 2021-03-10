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
               <td> <a href="admin/'.$value["ruta"].'" class="btn btn-primary">VER</a></td>
                </tr>';
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
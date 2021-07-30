<?php
class recursoBibliotecaC{
    public function obtenerRecursoC($Etiquetaid){
        try {
            $obtenerListaRecurso = recursoBibliotecaM::obtenerRecursoM($Etiquetaid);
                echo '<thead>
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
                echo '</tbody>';
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
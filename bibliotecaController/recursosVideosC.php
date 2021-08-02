<?php
class recursoVideoBibliotecaC
{
    public function obtenerRecursoVideosC($Etiquetaid)
    {
        try {
            $obtenerListaRecurso = recursoverBibliotecaVideoM::verRecursoVideoM($Etiquetaid);
            echo '<thead>
                        <tr class="success">
                            <th class="text-center">Titulo</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Autor</th>
                            <th class="text-center">Detalle</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                        <tbody>';
            foreach ($obtenerListaRecurso as $key => $value) {
                echo '<tr>
                                <td>' . $value["titulo"] . '</td>
                                <td>' . $value["nombre"] . '</td>
                                <td>' . $value["autor"] . '</td>
                                <td>' . $value["descripcion"] . '</td>
                                <td> 
                                    <div class="btn-group">
                                        <a href="'.$value["link"]. '"  class="btn btn-info btnVer" target="_blank" rel="noopener noreferrer">ver</a>
                                    </div>
                                </td>
                            </tr>';
            }
            echo '</tbody>';
        } catch (exception $ex) {
            echo 'Error -' . $ex;
        }
    }

    // public static function verRecursoVideosC($codigo)
    // {
    //     try {
    //         if ($codigo != null) {
    //             $obtenerVerRecursos = recursoverBibliotecaM::verRecursoM($codigo);
    //             return $obtenerVerRecursos;
    //         }
    //     } catch (Exception $ex) {
    //         echo 'Error - ' . $ex;
    //     }
    // }
}
?>
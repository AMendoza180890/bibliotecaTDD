<div class="container-fluid">
    <div class="page-header">
        <h2 class="all-tittles">Recurso Lectoescritura</h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">Todos los recursos de Lectoescritura</h3>
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
                    <tbody>
                        <?php
                        $etiqueta = 1;
                        $listaRecurso = new recursoBibliotecaC();
                        $listaRecurso->obtenerRecursoC($etiqueta);

                        $codigo = null;
                        $listaRecurso::verRecursoC($codigo);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include 'verRecursos.php'?>
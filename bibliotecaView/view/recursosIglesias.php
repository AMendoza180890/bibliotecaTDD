<div class="container-fluid">
                        <div class="page-header">
                          <h2 class="all-tittles">Recursos para Iglesias</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">Todos los Recursos para Iglesias</h3>
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
                                                $etiqueta =23;
                                                $listaRecurso = new recursoBibliotecaC();
                                                $listaRecurso -> obtenerRecursoC($etiqueta);

                                                $codigo = null;
                                                $listaRecurso::verRecursoC($codigo);
                                            ?>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div>
                        </div>


                        <?php include 'verRecursos.php';?>
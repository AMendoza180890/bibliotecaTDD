<div class="container-fluid">
                        <div class="page-header">
                          <h2 class="all-tittles">Recurso Estimulacion</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">Todos los recursos para el area Estimulacion</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Titulo</th>
                                                <th class="text-center">Descripcion</th>
                                                <th class="text-center">Autor</th>
                                                <th class="text-center">ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $etiqueta =7;
                                                $listaRecurso = new recursoBibliotecaC();
                                                $listaRecurso -> obtenerRecursoC($etiqueta);
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
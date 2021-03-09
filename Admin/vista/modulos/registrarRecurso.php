<div class="modal fade" role="dialog" id="registrarRecurso">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Registrar Recurso</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titulos</h2>
                            <input type="text" class="form-control input-lg" name="titulosNuevo" id="titulosNuevo" required>
                        </div>

                        <div class="form-group">
                            <h2>descripcion</h2>
                            <textarea class="form-control input-lg" name="detallesNuevo" id="detallesNuevo" cols="30" required></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Autor</h2>
                            <input type="text" class="form-control input-lg" name="autorNuevo" id="autorNuevo" required>
                        </div>

                        <div class="form-group">
                            <h2>Recurso:</h2>
                            <input type="file" name="recursoNuevo" id="recursoNuevo">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <input type="hidden" name="fotoActual" id="fotoActual">
                        </div>

                        <div class="form-group">
                            <h2>Opcion 1</h2>
                            <select name="rolNuevo1" class="form-control input-lg" required>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 2</h2>
                            <select name="rolNuevo2" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 3</h2>
                            <select name="rolNuevo3" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 4</h2>
                            <select name="rolNuevo4" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 5</h2>
                            <select name="rolNuevo5" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group6">
                            <h2>Opcion 6</h2>
                            <select name="rolNuevo" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group7">
                            <h2>Opcion 7</h2>
                            <select name="rolNuevo" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 8</h2>
                            <select name="rolNuevo8" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 9</h2>
                            <select name="rolNuevo9" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 10</h2>
                            <select name="rolNuevo10" class="form-control input-lg">
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $registrarRecurso   =   new recursoC();
                $registrarRecurso->registrarRecurso();
                ?>
            </form>
        </div>
    </div>
</div>
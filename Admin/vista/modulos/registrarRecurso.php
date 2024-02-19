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
                            <input type="hidden" name="recurso" id="recurso">
                        </div>

                        <div class="form-group">
                            <h2>Tipo de Archivo:</h2>
                            <?php
                            $opcionesDeTipoArchivos = new recursoC();
                            $opcionesDeTipoArchivos->listaDeTipoDeArchivos();
                            ?>
                        </div>

                        <div class="form-group">
                            <h2>Resumen:</h2>
                            <textarea class="form-control input-lg" name="resumenNuevo" id="resumenNuevo" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="from-group">
                            <h2>Asignar Etiquetas</h2>
                            <div class="row">
                                <div class="col-sm-8">
                                    <?php
                                    $opcionesDeTipoEtiquetas = new recursoC();
                                    $opcionesDeTipoEtiquetas->listaDeEtiquetasC();
                                    ?>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="form-control input-lg btn btn-success">Agregar</button>
                                </div>
                            </div>
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
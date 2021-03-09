<div class="modal fade" role="dialog" id="editarRecurso">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Editar Recurso</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titulos</h2>
                            <input type="text" class="form-control input-lg" name="titulosEdit" id="titulosEdit" required>
                            <input type="hidden" name="idEdit" id="idEdit">
                        </div>

                        <div class="form-group">
                            <h2>Detalles</h2>
                            <textarea name="detallesEdit" id="detallesEdit" cols="30" required></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Recurso:</h2>
                            <input type="file" name="fotoEdit" id="fotoEdit">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <input type="hidden" name="fotoActual" id="fotoActual">
                        </div>

                        <div class="form-group">
                            <h2>Opcion 1</h2>
                            <select name="rolEdit" class="form-control input-lg" required>
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 2</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 3</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 4</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 5</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 6</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 7</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 8</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 9</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 10</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $actualizarRecurso      =   new recursoC;
                $actualizarRecurso->actualizarRecurso();
                ?>
            </form>
        </div>
    </div>
</div>
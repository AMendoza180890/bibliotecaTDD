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
                            <h2>descripcion</h2>
                            <textarea class="form-control input-lg" name="detallesEdit" id="detallesEdit" cols="30" required></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Autor</h2>
                            <input type="text" class="form-control input-lg" name="autorEdit" id="autorEdit" required>
                        </div>

                        <div class="form-group">
                            <h2>Recurso:</h2>
                            <input type="file" name="recursoEdit" id="recursoEdit">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <input type="hidden" name="recursoActual" id="recursoActual">
                        </div>

                        <div class="form-group">
                            <h2>Tipo de Archivo:</h2>
                            <select name="tipoE" id="tipoE" class="form-control input-lg">
                                <option id="eleccionTipo"></option>
                                <option value="Word">Word</option>
                                <option value="Power Point">Power Point</option>
                                <option value="Excel">Excel</option>
                                <option value="Publisher">Publisher</option>
                                <option value="PDF">PDF</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Resumen:</h2>
                            <textarea class="form-control input-lg" name="resumenEditado" id="resumenEditado" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 1</h2>
                            <select name="opcion1" id="opcion1" class="form-control input-lg" required>
                                <option id="eleccion0"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 2</h2>
                            <select name="opcion2" id="opcion2" class="form-control input-lg">
                                <option id="eleccion1"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 3</h2>
                            <select name="opcion3" id="opcion3" class="form-control input-lg">
                                <option id="eleccion2"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 4</h2>
                            <select name="opcion4" id="opcion4" class="form-control input-lg">
                                <option id="eleccion3"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 5</h2>
                            <select name="opcion5" id="opcion5" class="form-control input-lg">
                                <option id="eleccion4"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 6</h2>
                            <select name="opcion6" id="opcion6" class="form-control input-lg">
                                <option id="eleccion5"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 7</h2>
                            <select name="opcion7" id="opcion7" class="form-control input-lg">
                                <option id="eleccion6"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 8</h2>
                            <select name="opcion8" id="opcion8" class="form-control input-lg">
                                <option id="eleccion7"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 9</h2>
                            <select name="opcion9" id="opcion9" class="form-control input-lg">
                                <option id="eleccion8"></option>
                                <?php
                                $listaEtiqueta = new etiquetasC;
                                $listaEtiqueta->listaEtiquetaC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Opcion 10</h2>
                            <select name="opcion10" id="opcion10" class="form-control input-lg">
                                <option id="eleccion9"></option>
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
                $actualizarRecurso      ->  actualizarRecurso();
                $actualizarRecurso      ->  asignarEtiquetas(); 
                ?>
            </form>
        </div>
    </div>
</div>
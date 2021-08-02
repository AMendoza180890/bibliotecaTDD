<div class="modal fade" role="dialog" id="registrarRecursoVideo">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Registrar Recurso de Video</h3>
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
                            <h2>Resumen:</h2>
                            <textarea class="form-control input-lg" name="resumenNuevo" id="resumenNuevo" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Link del Video</h2>
                            <input type="text" class="form-control input-lg" name="linkNuevo" id="linkNuevo" required>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                    $registrarRecurso   =   new recursoVideosC();
                    $registrarRecurso   ->  registrarVideoRecurso();
                ?>
            </form>
        </div>
    </div>
</div>
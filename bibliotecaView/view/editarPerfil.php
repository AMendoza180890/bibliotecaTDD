<div class="modal fade" role="dialog" id="editarPerfilUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3 class="all-tittles">Editar Usuarios</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        
                        <div class="form-group">
                            <h2 class="all-tittles">Escribir Contraseña Actual</h2>
                            <input type="password" class="form-control input-lg" name="claveEditPerfil" id="claveEditPerfil">
                        </div>

                        <div class="form-group">
                            <h2 class="all-tittles">Escribir Nueva Contraseña</h2>
                            <input type="password" class="form-control input-lg" name="claveNuevaEditPerfil" id="claveNuevaEditPerfil">
                        </div>

                        <div class="form-group">
                            <h2>Cambiar Foto:</h2>
                            <input type="file" name="fotoEditPerfil" id="fotoEditPerfil">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <?php
                                if (empty($_SESSION["foto"])) {
                                    echo '<img src="Admin/vista/img/usuario/defecto.png" alt="imagen" class="img-thumbnail visor" width="100px;">';
                                } else {
                                    echo '<img src="Admin/' . $_SESSION["foto"] . '" alt="imagen" class="img-thumbnail visor" width="100px;">';
                                }
                            ?>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $actualizarPerfilUsuario  = new perfilUsuarioC();
                $actualizarPerfilUsuario->actualizarPerfilUsuarioC();
                ?>
            </form>
        </div>
    </div>
</div>
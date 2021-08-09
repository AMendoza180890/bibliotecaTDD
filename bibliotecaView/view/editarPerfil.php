<div class="modal fade" role="dialog" id="editarPerfilUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Editar Usuarios</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Cambiar Contraseña</h2>
                            <input type="text" class="form-control input-lg" name="claveEditPerfil" id="claveEditPerfil" required>
                        </div>

                        <div class="form-group">
                            <h2>Cambiar Foto:</h2>
                            <input type="file" name="fotoEdit" id="fotoEditPerfil">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <img src="vista/img/usuario/defecto.png" alt="imagen" class="img-thumbnail visor" width="100px;">
                            <input type="hidden" name="fotoActual" id="fotoActual">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                    $actualizarUsuario  = new usuariosC();
                    $actualizarUsuario -> actualizarRegistroUsuarioC();
                ?>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="editarUsuario">
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
                            <h2>Usuario</h2>
                            <input type="text" class="form-control input-lg" name="usuarioEdit" id="usuarioEdit" required>
                            <input type="hidden" name="idEdit" id="idEdit">
                        </div>
                        <div class="form-group">
                            <h2>Clave</h2>
                            <input type="text" class="form-control input-lg" name="claveEdit" id="claveEdit" required>
                        </div>
                        <div class="form-group">
                            <h2>Email</h2>
                            <input type="email" class="form-control input-lg" name="emailEdit" id="emailEdit" required>
                        </div>
                        <div class="form-group">
                            <h2>Organización</h2>
                            <input type="text" class="form-control input-lg" name="organizacionEdit" id="organizacionEdit" required>
                        </div>
                        <div class="form-group">
                            <h2>Cargo</h2>
                            <input type="texto" class="form-control input-lg" name="cargoEdit" id="cargoEdit" required>
                        </div>
                        <div class="form-group">
                            <h2>Telefono</h2>
                            <input type="text" class="form-control input-lg" name="telefonoEdit" id="telefonoEdit" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="505-1234-1234" required>
                        </div>
                        <div class="form-group">
                            <h2>Rol</h2>
                            <select name="rolEdit" class="form-control input-lg">
                                <option id="rolEdit"></option>
                                <option value="1">Administrador</option>
                                <option value="2">Invitado</option>
                                <option value="3">Desactivado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Foto:</h2>
                            <input type="file" name="fotoEdit" id="fotoEdit">
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
                $actualizarUsuario->actualizarRegistroUsuarioC();
                ?>
            </form>
        </div>
    </div>
</div>
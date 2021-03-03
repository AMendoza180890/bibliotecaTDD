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
                        </div>
                        <div class="form-group">
                            <h2>Clave</h2>
                            <input type="password" class="form-control input-lg" name="claveEdit" id="claveEdit" required>
                        </div>
                        <div class="form-group">
                            <h2>Rol</h2>
                            <select name="rolEdit" id="rolEdit" class="form-control input-lg">
                                <?php
                                // $listadeRoles = new rolesUsuarioC;
                                // $listadeRoles->mostrarRolesUsuarioC();
                                echo '<option value="1" ' . ($value["rolid"] == 1 ? "selected" : "") . '">Administrador</option>';
                                echo '<option value="2" ' . ($value["rolid"] == 2 ? "selected" : "") . '">Invitado</option>';
                                echo '<option value="3" ' . ($value["rolid"] == 3 ? "selected" : "") . '">Desactivado</option>';
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Foto:</h2>
                            <input type="file" name="fotoEdit" id="fotoEdit">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $crearUsuario = new usuariosC();
                $crearUsuario->registrarUsuariosC();
                ?>
            </form>
        </div>
    </div>
</div>
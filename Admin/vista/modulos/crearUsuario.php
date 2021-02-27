<div class="modal fade" role="dialog" id="crearUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Crear Usuario</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Usuario</h2>
                            <input type="text" class="form-control input-lg" name="usuarioNuevo" id="usuarioNuevo" required>
                        </div>
                        <div class="form-group">
                            <h2>Clave</h2>
                            <input type="password" class="form-control input-lg" name="claveNuevo" id="claveNuevo" required>
                        </div>
                        <div class="form-group">
                            <h2>Rol</h2>
                            <select name="rolNuevo" id="rolNuevo" class="form-control input-lg">
                                <?php
                                $listadeRoles = new rolesUsuarioC;
                                $listadeRoles->mostrarRolesUsuarioC();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Foto:</h2>
                            <input type="file" name="fotoNuevo" id="fotoNuevo">
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
                    $crearUsuario -> registrarUsuariosC();
                ?>
            </form>
        </div>
    </div>
</div>
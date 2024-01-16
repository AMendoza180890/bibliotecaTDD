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
                            <h2>Email</h2>
                            <input type="email" class="form-control input-lg" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <h2>Organización</h2>
                            <input type="text" class="form-control input-lg" name="organizacion" id="organizacion" required>
                        </div>
                        <div class="form-group">
                            <h2>Cargo</h2>
                            <input type="texto" class="form-control input-lg" name="cargo" id="cargo" required>
                        </div>
                        <div class="form-group">
                            <h2>Telefono</h2>
                            <input type="tel" class="form-control input-lg" name="telefono" id="telefono" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="505-1234-1234" required>
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
                $crearUsuario->registrarUsuariosC();
                ?>
            </form>
        </div>
    </div>
</div>
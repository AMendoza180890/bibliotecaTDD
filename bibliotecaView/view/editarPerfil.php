<div class="modal fade" role="dialog" id="editarPerfilUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3 class="all-tittles">Editar Usuarios</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2 class="all-tittles">Cambiar Contraseña</h2>
                            <input type="text" class="form-control input-lg" name="claveEditPerfil" id="claveEditPerfil" required>
                        </div>

                        <div class="form-group">
                            <h2>Cambiar Foto:</h2>
                            <input type="file" name="fotoEditPerfil" id="fotoEditPerfil">
                            <p class="help-block">peso maximo permitido 200 Mb</p>
                            <?php 
                                if (empty($_SESSION["foto"])) {
                                    echo '<img src="Admin/vista/img/usuario/default.png" alt="imagen" class="img-thumbnail visor" width="100px;">';
                                }else{
                                    echo '<img src="Admin/'.$_SESSION["foto"].'" alt="imagen" class="img-thumbnail visor" width="100px;">';
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
                    // $actualizarUsuario  = new usuariosC();
                    // $actualizarUsuario -> actualizarRegistroUsuarioC();
                ?>
            </form>
        </div>
    </div>
</div>
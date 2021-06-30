<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor de Usuarios
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#crearUsuario">Crear Usuarios</button>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover table-striped TablaUsuario" id="tbl">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th>Foto</th>
                        <th>Rol</th>
                        <th>Editar/Desactivar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $mostrarUsuarios = new usuariosC;
                        $mostrarUsuarios -> listadeUsuarios();

                        $valor = null;
                        $editarUsuario = usuariosC::editarRegistroUsuarioC($valor);
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'crearUsuario.php';?>
<?php include 'editUsuario.php';?>
<?php 
  $desactivarUsuarioRol = new usuariosC;
  $desactivarUsuarioRol -> DesactivarUsuarioC();
?>
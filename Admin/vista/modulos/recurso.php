<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gestor de Recursos
    </h1>
    <small id="emailHelp" class="form-text text-muted">(Gestiona los Archivos)</small>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#registrarRecurso">Agregar Recurso</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-striped TablaRecursos" id="tbl">
          <thead>
            <tr>
              <th>Nº</th>
              <th>ruta</th>
              <th>nombre</th>
              <th>titulo</th>
              <th>descripcion</th>
              <th>autor</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $mostrarRecurso = new recursoC;
            $mostrarRecurso->mostrarRecursosRegistrados();

            $codigoRecurso = null;
            $obtenerRecurso = recursoC::obtenerRecursoRegistradoC($codigoRecurso);
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
<?php include 'registrarRecurso.php'; ?>
<?php include 'editarRecurso.php'; ?>
<?php
// $desactivarUsuarioRol = new usuariosC;
// $desactivarUsuarioRol->DesactivarUsuarioC();
?>
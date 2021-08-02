<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gestor de Recurso Audiovisual
    </h1>
    <small id="emailHelp" class="form-text text-muted">(Gestiona los links de videos)</small>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#registrarRecursoVideo">Agregar Recurso</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-striped TablaRecursos" id="tbl">
          <thead>
            <tr>
              <th>Nº</th>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Detalle</th>
              <th>Descripcion</th>
              <th>Link</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $mostrarRecurso = new recursoVideosC;
            $mostrarRecurso->mostrarRecursosVideoRegistrados();

            $codigoRecurso = null;
            $obtenerRecurso = recursoVideosC::obtenerRecursoRegistradoVideoC($codigoRecurso);
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
<?php include 'registrarRecursoVideo.php'; ?>
<?php include 'editarRecursoVideo.php'; ?>
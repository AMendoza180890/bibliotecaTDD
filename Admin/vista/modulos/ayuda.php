<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Modulo de ayuda para visitas
    </h1>
    <small id="helpcontent" class="form-text text-muted">(Mostrar información de ayuda a los visitantes.)</small>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#editarAyuda">Editar</button>
      </div>
      <div class="box-body">
        <?php
          $verAyuda = new ayudaController();
          $verAyuda -> mostrarAyudaC();
        ?>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'editAyuda.php'; ?>
<?php //include 'editarRecurso.php'; ?>
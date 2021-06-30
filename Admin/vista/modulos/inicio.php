<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <?php 
          $recursos = new dashboardHomeC();
          $recursos -> dashboardRecursosC();
        ?>
        <!-- ./col -->
        <?php
          $cantidadUsuarios = new dashboardHomeC();
          $cantidadUsuarios -> dashboardUsuariosC();
          ?>
        <!-- ./col -->
        <?php
          $cantidadUsuariosAdministradores = new dashboardHomeC();
          $cantidadUsuariosAdministradores -> dashboardUsuariosAdministradoresC();
        ?>
        <!-- ./col -->
        <?php
        $cantidadUsuariosInvitados = new dashboardHomeC();
        $cantidadUsuariosInvitados -> dashboardUsuariosInvitadosC();
        ?>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- seccion del centro -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <?php
            $recursosPorCategorias = new dashboardHomeC();
            $recursosPorCategorias -> dashboardRecursosPorCategoriasC();
          ?>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
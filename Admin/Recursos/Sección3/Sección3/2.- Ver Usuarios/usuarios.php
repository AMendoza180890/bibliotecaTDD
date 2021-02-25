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
          
          <button class="btn btn-primary">Crear Usuario</button>
        
        </div>
        <div class="box-body">
         
          <table class="table table-bordered table-hover table-striped">
              
            <thead>
              
              <tr>
                
                <th>N°</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Foto</th>
                <th>Rol</th>
                <th>Editar / Eliminar</th>

              </tr>

            </thead>

            <tbody>

              <?php

              $verU = new UsuariosC();
              $verU -> VerUsuariosC();

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





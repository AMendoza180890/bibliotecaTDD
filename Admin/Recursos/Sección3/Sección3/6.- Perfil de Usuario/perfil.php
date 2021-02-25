<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor de Perfil
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">
         
          <table class="table table-bordered table-hover table-striped TB">
              
            <thead>
              
              <tr>
              
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Foto</th>
                <th>Editar</th>

              </tr>

            </thead>

            <tbody>

              <?php

                $perfil = new UsuariosC();
                $perfil -> VerPerfilC();

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



<div class="modal fade" role="dialog" id="EditarU">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Nombre de Usuario:</h2>

              <input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE" required>

              <input type="hidden" id="Uid" name="Uid">

            </div>

            <div class="form-group">
              
              <h2>Contraseña:</h2>

              <input type="text" class="form-control input-lg" id="claveE" name="claveE" required>

            </div>


            <div class="form-group">
              
              <h2>Foto:</h2>

              <input type="file" id="fotoE" name="fotoE">

              <p class="help-block">peso máximo permitido 200 MB</p>

              <img src="Vistas/img/usuarios/defecto.png" class="img-thumbnail visor" width="100px;"> 

              <input type="hidden" name="FotoActual" id="FotoActual">

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-success">Guardar Cambios</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

          </div>

          <?php

          $actualizarU = new UsuariosC();
          $actualizarU -> ActualizarUsuariosC();

          ?>

        </form>

      </div>

    </div>

  </div>
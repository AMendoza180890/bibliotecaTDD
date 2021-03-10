<div class="login-box">
  <div class="login-logo">
    <a href="login"><b>Admin</b>Biblioteca</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" name="usuarioIngreso" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="passWord" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php
        $ingreso = new usuariosC;
        $ingreso -> ingresoUsuariosC();
      ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
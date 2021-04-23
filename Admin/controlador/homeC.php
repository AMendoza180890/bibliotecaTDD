<?php
class dashboardHomeC{
    public function dashboardRecursosC(){
        try {
            $totalRecursos = dashboardHomeM::dashboardRecursosM();

            if ($totalRecursos != null || !empty($totalRecursos)) {
                echo '<div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>'.$totalRecursos["total"].'</h3>
                    
                                    <p>Total Recursos Registrados</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-book-outline"></i>
                                </div>
                            <a href="recurso" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>';
            }else{
                echo '<div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>N/A</h3>
                    
                                    <p>Recursos Registrados</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-book-outline"></i>
                                </div>
                            <a href="recurso" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>';
            }
            
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function dashboardUsuariosC(){
        try {
            $totalUsuarios = dashboardHomeM::dashboardUsuariosM();

            if ($totalUsuarios != 0 || !empty($totalUsuarios)) {
                echo '<div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>'.$totalUsuarios["total"].'</h3>

                        <p>Total Usuarios Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="catusuarios" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>';
            } else {
                echo '<div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>N/A</h3>

                    <p>Total Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="catusuarios" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>';
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function dashboardUsuariosInvitadosC(){
        try {
            $totalUsuariosInvitados = dashboardHomeM::dashboardUsuariosInvitadosM();

            if ($totalUsuariosInvitados != 0 || !empty($totalUsuariosInvitados)) {
                echo '<div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>'.$totalUsuariosInvitados["total"].'</h3>
      
                    <p>Total Usuarios Invitados</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="catusuarios" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>';
            }else{
                echo '<div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>N/A</h3>
      
                    <p>Total Usuarios Invitados</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="catusuarios" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>';
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function dashboardUsuariosAdministradoresC(){
        try {

            $usuariosAdministradores = dashboardHomeM::dashboardUsuariosAdministradoresM();

            if ($usuariosAdministradores != 0 || !empty($usuariosAdministradores)) {
                echo '<div class="col-lg-3 col-xs-6">
                <!-- small box -->
                 <div class="small-box bg-green">
                  <div class="inner">
                    <h3>'.$usuariosAdministradores["total"].'</h3>
      
                    <p>Usuarios Administradores</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="catusuarios" class="small-box-footer">Click más información <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div> ';
            } else{
                echo '';
            }

        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
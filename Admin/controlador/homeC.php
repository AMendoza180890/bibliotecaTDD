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

    public function dashboardRecursosPorCategoriasC(){
        try {
            $ListaRecursosPorCategorias = dashboardHomeM::dashboardRecursosPorCategoriasM();

            if ($ListaRecursosPorCategorias != 0 || !empty($ListaRecursosPorCategorias)) {
                echo '<div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-book"></i>
    
                  <h3 class="box-title">Recursos por categorias</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">';
                    /*Aqui se agregan los recursos */
                foreach ($ListaRecursosPorCategorias as $key => $value) {
                        echo  '<div class="clearfix">
                                 <span class="pull-left">'.$value["etiqueta"].'</span>
                                 <small class="pull-right">'.$value["total"].'</small>
                               </div>';   
                }

                   echo  '</div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>';
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
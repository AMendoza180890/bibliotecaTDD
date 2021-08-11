        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <?php
                if ($_SESSION["foto"] != "") {
                    echo '<figure>
                    <img src="Admin/' . $_SESSION["foto"] . '" alt="user-picture" class="img-responsive img-circle center-box">
                 </figure>';
                } else {
                    echo '<figure>
                    <img src="bibliotecaView/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                 </figure>';
                }

                echo '<li  data-toggle="modal" data-target="#editarPerfilUsuario" data-placement="bottom" title="Editar Perfil">
                     <span class="all-tittles">' . $_SESSION["usuario"] . '</span>
                 </li>
                 <li  class="tooltips-general exit-system-button" data-href="salir" data-placement="bottom" title="Salir del sistema">
                     <i class="zmdi zmdi-power"></i>
                 </li>';
                $estadoAyuda = new ayudaVisitaController();
                $estadoAyuda -> estadoInfoAyudaC();
                 echo '<li  class="tooltips-general" data-placement="bottom" title="Buscar">
                     <i class="zmdi zmdi-search zmdi-hc-fw" id="btn-search"></i>
                 </li>
                 <li class="mobile-menu-button visible-xs" style="float: left !important;">
                     <i class="zmdi zmdi-menu"></i>
                 </li>
             </ul>';
                ?>
        </nav>
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <?php
                if ($_SESSION["foto"] != "") {
                    echo '<figure>
                    <img src="admin/'.$_SESSION["foto"].'" alt="user-picture" class="img-responsive img-circle center-box">
                 </figure>';
                }else{
                    echo '<figure>
                    <img src="bibliotecaView/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                 </figure>';
                }
                 
                 echo '<li style="color:#fff; cursor:default;">
                     <span class="all-tittles">'.$_SESSION["usuario"].'</span>
                 </li>
                 <li  class="tooltips-general exit-system-button" data-href="salir" data-placement="bottom" title="Salir del sistema">
                     <i class="zmdi zmdi-power"></i>
                 </li>
                 <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                     <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                 </li>
                 <li class="mobile-menu-button visible-xs" style="float: left !important;">
                     <i class="zmdi zmdi-menu"></i>
                 </li>
             </ul>';
                ?>
        </nav>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php';?>
<body class="full-cover-background" style="background-image:url(bibliotecaView/assets/img/font-login.jpg);">
              <!-- menu superior -->

              <!-- cuerpo de la pagina -->
              <?php 
               if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
                     //Menu
                     include 'bibliotecaView/view/menu.php';
                  
                     echo '<div class="content-page-container full-reset custom-scroll-containers">';
                     include 'bibliotecaView/view/menuSuperior.php';
                     
                     if (isset($_GET["ruta"])) {
                            if($_GET["ruta"] == "login" || $_GET["ruta"] == "home" || $_GET["ruta"] == "book" || $_GET["ruta"] == "salir"){
                                   include 'bibliotecaView/view/'.$_GET["ruta"].".php";
                            }else
                            {
                                   include 'bibliotecaView/view/index.php';
                            }
                     }else{
                            include 'bibliotecaView/view/index.php';
                     }
                     //plantilla de footer
                     include 'bibliotecaView/view/pie.php';
              }else
              {
                     include 'bibliotecaView/view/login.php';
              }
              ?>
    </div>
</body>
</html>
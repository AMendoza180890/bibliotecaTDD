<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php';?>
<body>
    <!-- Menu-->
    <?php include 'bibliotecaView/view/menu.php';?>

       <div class="content-page-container full-reset custom-scroll-containers">
              <!-- menu superior -->
              <?php include 'bibliotecaView/view/menuSuperior.php';?>

              <!-- cuerpo de la pagina -->
              <?php 
                     if (isset($_GET["ruta"])) {
                            if($_GET["ruta"] == "home" || $_GET["ruta"] == "book"){
                                   include 'bibliotecaView/view/'.$_GET["ruta"].".php";
                            }else
                            {
                                   include 'bibliotecaView/view/home.php';
                            }
                     }else{
                            include 'bibliotecaView/view/home.php';
                     }
              ?>
              <!-- plantilla de footer -->
              <?php include 'bibliotecaView/view/pie.php';?>
    </div>
</body>
</html>
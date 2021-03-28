<?php
if (!headers_sent()){
session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php';?>
<body class="full-cover-background" style="background-image:url(bibliotecaView/assets/img/font-login.jpg);">
<!-- cuerpo de la pagina -->
<?php 
       if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
//Menu
              include 'bibliotecaView/view/menu.php';
              echo '<div class="content-page-container full-reset custom-scroll-containers">';
              include 'bibliotecaView/view/menuSuperior.php';
                     
              if (isset($_GET["ruta"])) {
                     if($_GET["ruta"] == "login" || $_GET["ruta"] == "academico" || $_GET["ruta"] == "home" || $_GET["ruta"] == "book" || $_GET["ruta"] == "salir" || $_GET["ruta"] == "autismo" || $_GET["ruta"] == "conducta" || $_GET["ruta"] == "curriculum" || $_GET["ruta"] == "curso" || $_GET["ruta"] == "estimulacion" || $_GET["ruta"] == "fisioterapia" || $_GET["ruta"] == "historia" || $_GET["ruta"] == "iglesias" || $_GET["ruta"] == "ingles" || $_GET["ruta"] == "lenguaje" || $_GET["ruta"] == "piedu"|| $_GET["ruta"] == "catlectura"|| $_GET["ruta"] == "discapacidades"|| $_GET["ruta"] =="espiritual" || $_GET["ruta"] == "habilidades" || $_GET["ruta"] == "apoyoFamiliar"){
                            include 'bibliotecaView/view/'.$_GET["ruta"].".php";
                     }else{
                            include 'bibliotecaView/view/home.php';
                     }
              }else{
                     include 'bibliotecaView/view/home.php';
              }
//plantilla de footer
                     include 'bibliotecaView/view/pie.php';
       }else{
              include 'bibliotecaView/view/login.php';
       }
?>
    </div>
</body>
</html>
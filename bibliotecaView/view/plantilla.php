<?php
if (!headers_sent()){
session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php';
       require_once 'rutas.php'?>
<body class="full-cover-background" style="background-image:url(bibliotecaView/assets/img/BibliotecaVirtual.png);">
<!-- cuerpo de la pagina -->
<?php 
       if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
//Menu
              include 'bibliotecaView/view/menu.php';
              echo '<div class="content-page-container full-reset custom-scroll-containers">';
              include 'bibliotecaView/view/menuSuperior.php';
                     
              if (isset($_GET["ruta"])) {
                     if($rutas[$_GET["ruta"]]){

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
<script src="bibliotecaView/js/menu.js"></script>
<script src="bibliotecaView/js/recursos.js"></script>
<script>
       $(document).ready( function () {
           $('#todosRecursos').DataTable({
              "lengthMenu": [[100, 50, 25, 10, -1], [100, 50, 25, 10, "Todos"]],
              language: {
                     url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'
              }
           });
       } );
</script>
</html>
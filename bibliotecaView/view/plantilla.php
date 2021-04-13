<?php
if (!headers_sent()){
session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php';?>
<body class="full-cover-background" style="background-image:url(bibliotecaView/assets/img/BibliotecaVirtual.png);">
<!-- cuerpo de la pagina -->
<?php 
       if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
//Menu
              include 'bibliotecaView/view/menu.php';
              echo '<div class="content-page-container full-reset custom-scroll-containers">';
              include 'bibliotecaView/view/menuSuperior.php';
                     
              if (isset($_GET["ruta"])) {
                     if($_GET["ruta"] == "login"|| $_GET["ruta"] == "buscar" || $_GET["ruta"] == "academico" || $_GET["ruta"] == "home" || $_GET["ruta"] == "book" || $_GET["ruta"] == "salir" || $_GET["ruta"] == "autismo" || $_GET["ruta"] == "conducta" || $_GET["ruta"] == "curriculum" || $_GET["ruta"] == "curso" || $_GET["ruta"] == "estimulacion" || $_GET["ruta"] == "fisioterapia" || $_GET["ruta"] == "historia" || $_GET["ruta"] == "iglesias" || $_GET["ruta"] == "ingles" || $_GET["ruta"] == "lenguaje" || $_GET["ruta"] == "piedu"|| $_GET["ruta"] == "catlectura"|| $_GET["ruta"] == "discapacidades"|| $_GET["ruta"] =="espiritual" || $_GET["ruta"] == "habilidad" || $_GET["ruta"] == "apoyoFamiliar" || $_GET["ruta"] =="catmat" || $_GET["ruta"] == "catadecuaciones"|| $_GET["ruta"] == "aprendizaje"|| $_GET["ruta"] =="motor" || $_GET["ruta"] =="intelectual" || $_GET["ruta"] == "emocional"){
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
<script>
       $(document).ready( function () {
           $('#todosRecursos').DataTable({
              language: {
                     processing: "Procesando...",
                     lengthMenu: "Mostrar _MENU_ registros",
                     zeroRecords: "No se encontraron resultados",
                     emptyTable: "Ningún dato disponible en esta tabla",
                     infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                     infoFiltered: "(filtrado de un total de _MAX_ registros)",
                     info: "Mostrando de _START_ a _END_ de _TOTAL_ entradas",
                     search: "Buscar:",
                     infoThousands: ",",
                     loadingRecords: "Cargando...",
                     paginate: {
                            first: "Primero",
                            last: "Último",
                            next: "Siguiente",
                            previous: "Anterior"
                     },
                     aria: {
                            sortAscending: "Activar para ordenar la columna de manera ascendente",
                            sortDescending: "Activar para ordenar la columna de manera descendente"
                     },
              }
           });
       } );
</script>
</html>
<?php
if (!headers_sent()) {
       session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'bibliotecaView/view/encabezado.php'; ?>

<body class="full-cover-background" style="background-image:url(bibliotecaView/assets/img/BibliotecaVirtual.png);">
       <!-- cuerpo de la pagina -->
       <?php
       if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
              //Menu
              include 'bibliotecaView/view/menu.php';
              echo '<div class="content-page-container full-reset custom-scroll-containers">';
              include 'bibliotecaView/view/menuSuperior.php';

              //La funcion instanciada consulta las paginas para saber si existe la pagina
              $rutaRecurso = new rutaRecursoBibliotecaC();
              $rutaRecurso->obtenerRutaEtiquetaC();
              
              //plantilla de footer
              include 'bibliotecaView/view/pie.php';
       } else {
              include 'bibliotecaView/view/login.php';
       }
       ?>
       </div>
</body>
<script src="bibliotecaView/js/menu.js"></script>
<script src="bibliotecaView/js/recursos.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
       $('#todosRecursos').DataTable({
              "lengthMenu": [
                          [100, 50, 25, 10, -1],
                          [100, 50, 25, 10, "Todos"]
                     ],
              language: {
                     url: 'https://cdn.datatables.net/plug-ins/2.0.7/i18n/es-CO.json',
              },
              Response:true,
       });
</script>

</html>
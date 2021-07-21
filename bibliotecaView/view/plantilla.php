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
                     if($_GET["ruta"] == "login"|| $_GET["ruta"] == "buscar" || $_GET["ruta"] == "academico" || $_GET["ruta"] == "home" || $_GET["ruta"] == "book" || $_GET["ruta"] == "salir" || $_GET["ruta"] == "autismo" || $_GET["ruta"] == "conducta" || $_GET["ruta"] == "curriculum" || $_GET["ruta"] == "curso" || $_GET["ruta"] == "estimulacion" || $_GET["ruta"] == "fisioterapia" || $_GET["ruta"] == "historia" || $_GET["ruta"] == "iglesias" || $_GET["ruta"] == "ingles" || $_GET["ruta"] == "lenguaje" || $_GET["ruta"] == "piedu"|| $_GET["ruta"] == "catlectura"|| $_GET["ruta"] == "discapacidades"|| $_GET["ruta"] =="espiritual" || $_GET["ruta"] == "habilidad" || $_GET["ruta"] == "apoyoFamiliar" || $_GET["ruta"] =="catmat" || $_GET["ruta"] == "catadecuaciones"|| $_GET["ruta"] == "aprendizaje"|| $_GET["ruta"] =="motor" || $_GET["ruta"] =="intelectual" || $_GET["ruta"] == "emocional"|| $_GET["ruta"] == "independencia" || $_GET["ruta"] == "vocacional" || $_GET["ruta"] == 'habilidadesVidaDiaria' || $_GET["ruta"] == 'manejoClases' || $_GET["ruta"]== 'intervencionConducta'
                     || $_GET["ruta"]== 'autoCuido'|| $_GET["ruta"]== 'Cognitiva'|| $_GET["ruta"]== 'Comunicacion'|| $_GET["ruta"]== 'FisicoSensorial'|| $_GET["ruta"]== 'SocioEmocional'|| $_GET["ruta"]== 'capacitacionesIglesias'|| $_GET["ruta"]== 'predicas'|| $_GET["ruta"]== 'recursosIglesias'|| $_GET["ruta"]== 'alimentacion'|| $_GET["ruta"]== 'audicion'|| $_GET["ruta"]== 'encuesta'|| $_GET["ruta"]== 'lengua'|| $_GET["ruta"]== 'lenguajeSenas'|| $_GET["ruta"]== 'sistemasAumentativoAlternativos'|| $_GET["ruta"]== 'sonidosHabla'|| $_GET["ruta"]== 'protocolos'|| $_GET["ruta"]== 'talleres'|| $_GET["ruta"]== 'tartamudez'|| $_GET["ruta"]== 'logopedia' || $_GET["ruta"]== 'curriculoTdd'|| $_GET["ruta"]== 'evalua'|| $_GET["ruta"]== 'individual' || $_GET["ruta"] == 'terapia'|| $_GET["ruta"] == 'capacitacionesTerapia'|| $_GET["ruta"] == 'equinoterapia'|| $_GET["ruta"] == 'terapiaOcupacional'){

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
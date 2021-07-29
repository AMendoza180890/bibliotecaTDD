<?php
include_once 'controlador/plantillaC.php';
include_once 'controlador/usuariosC.php';
include_once 'controlador/rolesC.php';
include_once 'controlador/tratamientoImagen.php';
include_once 'controlador/tratamientoRecursos.php';
include_once 'controlador/recursosC.php';
include_once 'controlador/etiquetasC.php';
include_once 'controlador/homeC.php';
include_once 'controlador/ayudaC.php';
include_once 'controlador/recursosVideosC.php';

include_once 'modelo/usuariosM.php';
include_once 'modelo/recursosM.php';
include_once 'modelo/rolesM.php';
include_once 'modelo/etiquetasM.php';
include_once 'modelo/homeM.php';
include_once 'modelo/ayudaM.php';
include_once 'modelo/recursosVideosM.php';

$plantilla = new plantillaAdminLteC();
$plantilla -> llamarPlantillaAdminLte();
?>
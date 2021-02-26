<?php
include_once 'controlador/plantillaC.php';
include_once 'controlador/usuariosC.php';
include_once 'controlador/rolesC.php';
include_once 'controlador/tratamientoImagen.php';

include_once 'modelo/usuariosM.php';
include_once 'modelo/rolesM.php';

$plantilla = new plantillaAdminLteC();
$plantilla -> llamarPlantillaAdminLte();
?>
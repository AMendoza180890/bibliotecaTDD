<?php
require_once 'bibliotecaController/plantillaC.php';
require_once 'bibliotecaController/usuarioBibliotecaC.php';

require_once 'bibliotecaModel/usuarioBibliotecaM.php';

$plantilla = new plantillaC();
$plantilla -> llamarPlantilla();
?>
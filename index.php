<?php
require_once 'bibliotecaController/plantillaC.php';
require_once 'bibliotecaController/usuarioBibliotecaC.php';
require_once 'bibliotecaController/recursoBibliotecaC.php';
require_once 'bibliotecaController/ayudaVisitaC.php';

require_once 'bibliotecaModel/usuarioBibliotecaM.php';
require_once 'bibliotecaModel/recursoBibliotecaM.php';
require_once 'bibliotecaModel/ayudaVisitaM.php';

$plantilla = new plantillaC();
$plantilla -> llamarPlantilla();
?>
<?php
require_once 'bibliotecaController/plantillaC.php';
require_once 'bibliotecaController/usuarioBibliotecaC.php';
require_once 'bibliotecaController/recursoBibliotecaC.php';
require_once 'bibliotecaController/ayudaVisitaC.php';
require_once 'bibliotecaController/recursosVideosC.php';
require_once 'bibliotecaController/perfilUsuarioC.php';
require_once 'bibliotecaController/tratamientoImagenPerfil.php';
require_once 'bibliotecaController/rutaBibliotecaC.php';

require_once 'bibliotecaModel/usuarioBibliotecaM.php';
require_once 'bibliotecaModel/recursoBibliotecaM.php';
require_once 'bibliotecaModel/ayudaVisitaM.php';
require_once 'bibliotecaModel/recursosVideosM.php';
require_once 'bibliotecaModel/perfilUsuarioM.php';
require_once 'bibliotecaModel/rutaBibliotecaM.php';
require_once 'Admin/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__)->load();

$plantilla = new plantillaC();
$plantilla->llamarPlantilla();

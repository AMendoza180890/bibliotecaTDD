<!-- Plantilla de paginas en donde cargaran los recursos. -->
<div class="container-fluid">
            <?php
            // Se instancia la clase y se llama a la funcion para buscar la etiqueta y se cargue por base de datos la pagina.
            $listaRecurso = new recursoBibliotecaC();
            $listaRecurso->obtenerCodigoEtiquetaC();
            // Esta funcion sirve para cargar datos en formulario del boton ver.
            $codigo = null;
            $listaRecurso::verRecursoC($codigo);
            ?>
</div>


<?php 
// Este es el link para cargar ver recursos.
include 'verRecursos.php'; 
?>
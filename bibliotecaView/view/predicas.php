<div class="container-fluid">
                <?php
                    $listaRecurso = new recursoBibliotecaC();
                    $listaRecurso->obtenerCodigoEtiquetaC();

                    $codigo = null;
                    $listaRecurso::verRecursoC($codigo);
                ?>
</div>


    <?php include 'verRecursos.php'; ?>
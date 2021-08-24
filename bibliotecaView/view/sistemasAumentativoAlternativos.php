<div class="container-fluid">
    <div class="page-header">
        <h2 class="all-tittles">Recursos de Logopedia</h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
                    <?php
                    $etiqueta = 31;
                    $listaRecurso = new recursoBibliotecaC();
                    $listaRecurso->obtenerRecursoC($etiqueta);

                    $codigo = null;
                    $listaRecurso::verRecursoC($codigo);
                    ?>
            </div>
        </div>
    </div>

    <?php include 'verRecursos.php'; ?>
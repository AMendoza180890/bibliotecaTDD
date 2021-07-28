<div class="container-fluid">
    <div class="page-header">
        <h2 class="all-tittles">Recurso de Apoyo Familiar</h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">Todos los recursos de Apoyo Familiar</h3>
            <div class="table-responsive">
                <!-- LA TABLA VA AQUI -->
                <table class="table table-hover text-center tbl">
                    <?php
                    $etiqueta = 4;
                    $listaRecurso = new recursoBibliotecaC();
                    $listaRecurso->obtenerRecursoC($etiqueta);

                    $codigo = null;
                    $listaRecurso::verRecursoC($codigo);
                    ?>
                </table>
            </div>
        </div>
    </div>

    <?php include 'verRecursos.php'; ?>
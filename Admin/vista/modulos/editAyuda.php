<div class="modal fade" role="dialog" id="editarAyuda">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <li class="fa fa-time"></li>
                    </button>
                    <h3>Editar Información de Ayuda</h3>
                </div>
                <?php
                $editarFrmAyuda  = new ayudaController();
                $editarFrmAyuda->editarAyuda();
                ?>
            </form>
        </div>
    </div>
</div>
<?php
$actualizarAyuda  = new ayudaController();
$actualizarAyuda->actualizarAyudaC();
?>
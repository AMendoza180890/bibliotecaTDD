<!-- modal de ayuda para agregar cualquier nota en ayuda -->
<div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php
        $cargarInformacion = new ayudaVisitaController();
        $cargarInformacion -> cargarInfoAyudaC();
      ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
      </div>
    </div>
  </div>
</div>
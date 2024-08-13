<?php
    class ayudaController{
        public function mostrarAyudaC(){
            try {
                $obtenerInformacionDeAyuda = ayudaModel::mostrarAyudaM();
                
                echo '  <h2>Titulo:</h2>
                        <h4>'.$obtenerInformacionDeAyuda["titulo"].'</h4>
                        <hr>

                        <h2>Descripción:</h2>
                        <h4>'.$obtenerInformacionDeAyuda["descripcion"].'</h4>
                        <hr>

                        <h2>Estado:</h2>
                        <h4>'.($obtenerInformacionDeAyuda["estado"] == 1? 'visible': 'No visible').'</h4>
                        <hr>';

            } catch (exception $ex) {
                notificationC::showNotification("Error al mostrar la informacion de ayuda ". $ex, "error");
            }
        }

        public function editarAyuda()
        {
            try {
            $obtenerInformacionDeAyuda = ayudaModel::mostrarAyudaM();

            echo '<div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titulo</h2>
                            <input type="text" class="form-control input-lg" name="tituloEdit" id="tituloEdit" value="'.$obtenerInformacionDeAyuda["titulo"].'" required>
                            <input type="hidden" name="idEdit" id="idEdit" value="'.$obtenerInformacionDeAyuda["id"].'" >
                        </div>
                        <div class="form-group">
                            <h2>Descripción:</h2>
                            <textarea class="form-control input-lg" name="descripcionEdit" id="descripcionEdit" cols="30" rows="10" required>' . $obtenerInformacionDeAyuda["descripcion"] . '</textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="estadoEdit" name="estadoEdit" '.($obtenerInformacionDeAyuda["estado"] == 1 ? 'checked' : '').'>
                            <label class="form-check-label" for="estadoEdit">Estado</label>
                            <small id="ayudaContent" class="form-text text-muted">(visible o no visible)</small>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>';

            } catch (exception $ex) {
                notificationC::showNotification("Error al editar la ayuda ". $ex, "error");
            }
        }

        public function actualizarAyudaC()
        {
            try {
                if (isset($_POST["tituloEdit"]) && isset($_POST["descripcionEdit"])) {
                    
                    $infoAyuda = ["titulo" => $_POST["tituloEdit"], "descripcion" => $_POST["descripcionEdit"], "estado" => isset($_POST["estadoEdit"])];
                    
                    $actualizarInformacion = ayudaModel::actualizarAyudaM($infoAyuda);

                    if ($actualizarInformacion) {
                        notificationC::showNotification("Se actualizo la informacion de la ayuda", "success");
                        sleep(2);
                        echo '<script>window.location = "ayuda"</script>';
                    }else{
                        notificationC::showNotification("Error al actualizar la informacion de la ayuda ", "error");
                    }
                }
            } catch (exception $ex) {
                notificationC::showNotification('Ocurrió un error con el modulo de ayuda, Puede notificar escribiendo al correo <a href="mailto:biblioteca@tesorosdedios.org">biblioteca@tesorosdedios.org</a> ', "error");
            }
        }
    }

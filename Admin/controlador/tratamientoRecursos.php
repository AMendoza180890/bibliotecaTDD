<?php

class tratamientoRecurso {
    public static function subirRecurso($nombreElemento,$elemento){
        try {
            $rutaRecurso = "";
            if (isset($nombreElemento) && !empty($nombreElemento)) {
                $rutaCarpeta = "vista/recurso/";
                $rutaRecurso = $rutaCarpeta.basename($elemento);
                if (move_uploaded_file($nombreElemento, $rutaRecurso)) {
                    return  $rutaRecurso;
                }
            }
            return $rutaRecurso;
        } catch (Exception $ex) {
            notificationC::showNotification("Error al subir el recurso", "error");
        }
    }
}
?>
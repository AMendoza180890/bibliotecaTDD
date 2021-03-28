<?php

class tratamientoImagen {
    public static function tratamientoTipoImagen($nombreElemento,$elemento){
        try {
            $rutaImagen = "";
             if (isset($nombreElemento) && !empty($nombreElemento)) {
                if ($elemento["type"] == "image/jpeg") {
                    $nombreImagen = mt_rand(10,999);
                    $rutaImagen = "vista/img/usuario/U".$nombreImagen.".jpg";
                    $foto = imagecreatefromjpeg($nombreElemento);
                    imagejpeg($foto,$rutaImagen);
                }
                if ($elemento["type"] == "image/png") {
                    $nombreImagen = mt_rand(10,999);
                    $rutaImagen = "vista/img/usuario/U".$nombreImagen.".png";
                    $foto = imagecreatefrompng($nombreElemento);
                    imagepng($foto,$rutaImagen);
                }
                return $rutaImagen;
            }else{
                return $rutaImagen;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
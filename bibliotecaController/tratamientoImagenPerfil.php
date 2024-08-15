<?php 

class tratamientoImagenPerfil {
    public static function tratamientoTipoImagenPerfil($nombreElemento,$elemento){
        try {
            $rutaImagen = "";
             if (isset($nombreElemento) && !empty($nombreElemento)) {
                if ($elemento["type"] == "image/jpeg") {
                    $nombreImagen = mt_rand(10,999);
                    $rutaImagen = "Admin/vista/img/usuario/U".$nombreImagen.".jpg";
                    $nombreImagenExtension = $nombreImagen.".jpg";
                    $foto = imagecreatefromjpeg($nombreElemento);
                    imagejpeg($foto,$rutaImagen);
                }
                if ($elemento["type"] == "image/png") {
                    $nombreImagen = mt_rand(10,999);
                    $rutaImagen = "Admin/vista/img/usuario/U".$nombreImagen.".png";
                    $nombreImagenExtension = $nombreImagen.".png";
                    $foto = imagecreatefrompng($nombreElemento);
                    imagepng($foto,$rutaImagen);
                }
                return $nombreImagenExtension;
            }else{
                return $rutaImagen;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
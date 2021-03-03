<?php

class tratamientoImagen {
    public static function tratamientoTipoImagen($nombreElemento){
        $rutaImagen = "";
        if (isset($_FILES[$nombreElemento]["tmp_name"])&& !empty($_FILES[$nombreElemento]["tmp_name"])) {
            if ($_FILES[$nombreElemento]["type"] == "image/jpeg") {
                $nombreImagen = mt_rand(10,999);
                $rutaImagen = "vista/img/usuario/U".$nombreImagen.".jpg";
                $foto = imagecreatefromjpeg($_FILES[$nombreElemento]["tmp_name"]);
                imagejpeg($foto,$rutaImagen);
            }

            if ($_FILES[$nombreElemento]["type"] == "image/png") {
                $nombreImagen = mt_rand(10,999);
                $rutaImagen = "vista/img/usuario/U".$nombreImagen.".png";
                $foto = imagecreatefrompng($_FILES[$nombreElemento]["tmp_name"]);
                imagepng($foto,$rutaImagen);
            }
            return $rutaImagen;
        }
    }
}
?>
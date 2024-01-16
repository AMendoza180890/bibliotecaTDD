<?php
require_once "conexionBD.php";
class cifradoClave extends conexionBD
{
    private function cifrar($clave)
    {
        $tratamientoPassword = hash("sha256", $clave);
        return $tratamientoPassword;
    }

    public static function cifrarClave($clave)
    {
        $tratamientoPassword = new cifradoClave();
        $tratamientoPassword->cifrar($clave);
        return $tratamientoPassword;
    }
}

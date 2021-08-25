<?php
    require_once 'Admin/modelo/conexionBD.php';

class rutaRecursoBibliotecaM extends conexionBD{
    
    public static function obtenerRutaEtiquetaM($ruta){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, idEtiqueta, nombrePagina, nombrePaginaTipo FROM catpaginas WHERE nombrePagina = :etiqueta ");
            $pdo->bindParam("etiqueta",$ruta,PDO::PARAM_STR);
            $pdo->execute();
            return $pdo->fetch();
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
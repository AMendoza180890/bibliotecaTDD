<?php
require_once 'Admin/modelo/conexionBD.php';

class recursoverBibliotecaVideoM extends conexionBD
{

    public static function verRecursoVideoM($codigo)
    {
        try {

            $pdo = conexionBD::conexion()->prepare("SELECT `catrecursosvideos`.`id`, `catrecursosvideos`.`nombre`, `catrecursosvideos`.`link`, `catrecursosvideos`.`titulo`, `catrecursosvideos`.`descripcion`, `catrecursosvideos`.`autor` FROM `catrecursosvideos` inner join unionetiquetacatrecursovideo on `catrecursosvideos`.`id` = unionetiquetacatrecursovideo.recursovideoid where unionetiquetacatrecursovideo.etiquetaid = :id");
            $pdo->bindParam("id", $codigo, PDO::PARAM_INT);
            $pdo->execute();

            return $pdo->fetchAll();
        } catch (Exception $ex) {
            echo 'Error -' . $ex;
        }
    }
}
?>
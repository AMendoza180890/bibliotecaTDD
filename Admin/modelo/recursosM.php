<?php
require_once 'conexionBD.php';
class recursoM extends conexionBD{
    public static function mostrarRecursoM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, nombre, ruta, titulo, descripcion, autor FROM  catrecursos");
            $pdo ->execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function registrarRecursoM($datosRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO catrecursos (nombre, ruta, titulo, descripcion, autor) VALUES (:nombre, :ruta, :titulo, :descripcion, :autor)");
            $pdo    ->  bindParam("nombre",$datosRecurso["nombreArchivo"],PDO::PARAM_STR);
            $pdo    ->  bindParam("ruta", $datosRecurso["ruta"],PDO::PARAM_STR);
            $pdo    ->  bindParam("titulo", $datosRecurso["titulo"], PDO::PARAM_STR);
            $pdo    ->  bindParam("descripcion", $datosRecurso["detalle"], PDO::PARAM_STR);
            $pdo    ->  bindParam("autor", $datosRecurso["autor"], PDO::PARAM_STR);

            if($pdo -> execute()){
                return true;
            }else {
                return false;
            }

        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function obtenerRecursoRegistradoM($codigoRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, nombre, ruta, titulo, descripcion, autor FROM  catrecursos WHERE id = :id");
            $pdo -> bindParam("id",$codigoRecurso,PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
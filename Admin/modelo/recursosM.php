<?php
require_once 'conexionBD.php';
class recursoM extends conexionBD{
    public static function mostrarRecursoM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, ruta, titulo, descripcion, autor FROM  catrecursos");
            $pdo ->execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function registrarRecursoM($datosRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO catrecursos (ruta, titulo, descripcion, autor) VALUES (:ruta, :titulo, :descripcion, :autor)");
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
}
?>
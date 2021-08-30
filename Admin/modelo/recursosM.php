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
            //conexionBD::conexion()->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
            $pdo = conexionBD::conexion()->prepare("INSERT INTO catrecursos (nombre, ruta, titulo, descripcion, autor, tipo, resumen) VALUES (:nombre, :ruta, :titulo, :descripcion, :autor, :tipo, :resumen)");
            $pdo    ->  bindParam("nombre",$datosRecurso["nombreArchivo"],PDO::PARAM_STR);
            $pdo    ->  bindParam("ruta", $datosRecurso["ruta"],PDO::PARAM_STR);
            $pdo    ->  bindParam("titulo", $datosRecurso["titulo"], PDO::PARAM_STR);
            $pdo    ->  bindParam("descripcion", $datosRecurso["detalle"], PDO::PARAM_STR);
            $pdo    ->  bindParam("autor", $datosRecurso["autor"], PDO::PARAM_STR);
            $pdo    ->  bindParam("tipo", $datosRecurso["tipoArchivo"], PDO::PARAM_STR);
            $pdo    ->  bindParam("resumen", $datosRecurso["resumenN"], PDO::PARAM_STR);
            
            if($pdo -> execute()){
                //obtener el codigo de registro del archivo
                $proceso = conexionBD::conexion()->prepare("SELECT id, nombre, ruta, titulo, descripcion, autor, tipo, resumen FROM catrecursos WHERE nombre = :nombre and ruta = :ruta and titulo = :titulo");
                $proceso->bindParam("nombre", $datosRecurso["nombreArchivo"], PDO::PARAM_STR);
                $proceso->bindParam("ruta", $datosRecurso["ruta"], PDO::PARAM_STR);
                $proceso->bindParam("titulo", $datosRecurso["titulo"], PDO::PARAM_STR);
                $proceso -> execute();
                //$id = conexionBD::conexion()->lastInsertId();
                return $proceso->fetch();
            }

        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function obtenerRecursoRegistradoM($codigoRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, nombre, ruta, titulo, descripcion, autor, tipo, resumen FROM  catrecursos WHERE id = :id");
            $pdo -> bindParam("id",$codigoRecurso,PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function actualizarRecursoM($datosRecursoActualizado){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE catrecursos SET nombre = :nombre, ruta = :ruta, titulo = :titulo, descripcion = :descripcion, autor=:autor, tipo=:tipo, resumen=:resumen WHERE id = :id");
            $pdo -> bindParam("id",$datosRecursoActualizado["id"],PDO::PARAM_INT);
            $pdo -> bindParam("nombre",$datosRecursoActualizado["nombre"],PDO::PARAM_STR);
            $pdo -> bindParam("ruta",$datosRecursoActualizado["ruta"],PDO::PARAM_STR);
            $pdo -> bindParam("titulo",$datosRecursoActualizado["titulo"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcion",$datosRecursoActualizado["detalle"],PDO::PARAM_STR);
            $pdo -> bindParam("autor",$datosRecursoActualizado["autor"],PDO::PARAM_STR);
            $pdo -> bindParam("tipo",$datosRecursoActualizado["tipoArchivoEditado"],PDO::PARAM_STR);
            $pdo -> bindParam("resumen",$datosRecursoActualizado["resumenEditado"],PDO::PARAM_STR);

            if ($pdo->execute()) {
                return true;
            }else{
                return false;
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public  function asignarEtiquetas($etiquetasAsignadas,$id){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO unionetiquetascatrecurso( idRecurso, idEtiqueta) VALUES (:idRecurso, :idEtiqueta)");
            $pdo ->bindParam("idRecurso",$id,PDO::PARAM_INT);
            $pdo ->bindParam("idEtiqueta",$etiquetasAsignadas,PDO::PARAM_INT);
            $pdo->execute();

        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function eliminarEtiquetas($id){
        try {
            $pdo = conexionBD::conexion()->prepare("DELETE FROM unionetiquetascatrecurso WHERE idRecurso = :id");
            $pdo ->bindParam("id",$id,PDO::PARAM_INT);
            $pdo->execute();
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function obtenerEtiquetaRecurso($codigoRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT catrecursos.id, catetiquetas.id AS etiquetaId, catetiquetas.etiquetaDescripcion FROM catetiquetas INNER JOIN unionetiquetascatrecurso on catetiquetas.id = unionetiquetascatrecurso.idEtiqueta INNER JOIN catrecursos on unionetiquetascatrecurso.idRecurso = catrecursos.id where catrecursos.id = :id");
            $pdo ->bindParam("id",$codigoRecurso,PDO::PARAM_INT);
            $pdo ->execute();
            return $pdo->fetchAll();
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
?>
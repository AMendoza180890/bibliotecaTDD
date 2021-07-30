<?php
require_once 'conexionBD.php';
class recursoVideosM extends conexionBD{
    
    public static function mostrarRecursoVideoM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, nombre, link, titulo, descripcion, autor FROM catrecursosvideos");
            $pdo ->execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function registrarRecursoVideoM($datosRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO catrecursosvideos(nombre, link, titulo, descripcion, autor) VALUES (:nombre, :link, :titulo, :descripcion, :autor)");
            $pdo    ->  bindParam("nombre",$datosRecurso["nombreArchivo"],PDO::PARAM_STR);
            $pdo    ->  bindParam("link", $datosRecurso["link"],PDO::PARAM_STR);
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

    public static function obtenerRecursoRegistradoVideoM($codigoRecurso){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, nombre, link, titulo, descripcion, autor FROM catrecursosvideos WHERE id = :id");
            $pdo -> bindParam("id",$codigoRecurso,PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function actualizarRecursoVideoM($datosRecursoActualizado){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE catrecursosvideos SET nombre=:nombre,link=:link,titulo=titulo,descripcion=:descripcion,autor=:autor WHERE id=:id");
            $pdo -> bindParam("id",$datosRecursoActualizado["id"],PDO::PARAM_INT);
            $pdo -> bindParam("nombre",$datosRecursoActualizado["nombre"],PDO::PARAM_STR);
            $pdo -> bindParam("link",$datosRecursoActualizado["link"],PDO::PARAM_STR);
            $pdo -> bindParam("titulo",$datosRecursoActualizado["titulo"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcion",$datosRecursoActualizado["detalle"],PDO::PARAM_STR);
            $pdo -> bindParam("autor",$datosRecursoActualizado["autor"],PDO::PARAM_STR);

            if ($pdo->execute()) {
                return true;
            }else{
                return false;
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public  function asignarEtiquetasVideos($etiquetasAsignadas,$id){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO unionetiquetacatrecursovideo(recursovideoid, etiquetaid) VALUES (:idRecurso, :idEtiqueta)");
            $pdo ->bindParam("idRecurso",$id,PDO::PARAM_INT);
            $pdo ->bindParam("idEtiqueta",$etiquetasAsignadas,PDO::PARAM_INT);
            $pdo->execute();

        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function eliminarEtiquetasVideos($id){
        try {
            $pdo = conexionBD::conexion()->prepare("DELETE FROM unionetiquetacatrecursovideo WHERE recursovideoid = :id");
            $pdo ->bindParam("id",$id,PDO::PARAM_INT);
            $pdo->execute();
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    // public static function obtenerEtiquetaRecursoVideo($codigoRecurso){
    //     try {
    //         $pdo = conexionBD::conexion()->prepare("SELECT catrecursos.id, catetiquetas.id AS etiquetaId, catetiquetas.etiquetaDescripcion FROM catetiquetas INNER JOIN unionetiquetascatrecurso on catetiquetas.id = unionetiquetascatrecurso.idEtiqueta INNER JOIN catrecursos on unionetiquetascatrecurso.idRecurso = catrecursos.id where catrecursos.id = :id");
    //         $pdo ->bindParam("id",$codigoRecurso,PDO::PARAM_INT);
    //         $pdo ->execute();
    //         return $pdo->fetchAll();
    //     } catch (exception $ex) {
    //         echo 'Error - '.$ex;
    //     }
    // }
}
?>
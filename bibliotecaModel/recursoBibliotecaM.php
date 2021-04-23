<?php
require_once 'conexionBD.php';
class recursoBibliotecaM extends conexionBD{
    public static function obtenerRecursoM($Etiquetaid){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT catrecursos.id, catrecursos.nombre, catrecursos.ruta, catrecursos.titulo, catrecursos.descripcion, catrecursos.autor, catetiquetas.etiquetaDescripcion, catrecursos.tipo, catrecursos.resumen FROM catrecursos INNER JOIN unionetiquetascatrecurso on catrecursos.id = unionetiquetascatrecurso.idRecurso INNER JOIN catetiquetas on unionetiquetascatrecurso.idEtiqueta = catetiquetas.id WHERE unionetiquetascatrecurso.idEtiqueta = :etiqueta");
            $pdo->bindParam("etiqueta",$Etiquetaid,PDO::PARAM_INT);
            $pdo->execute();

            /*"SELECT catrecursos.id, catrecursos.nombre, catrecursos.ruta, catrecursos.titulo, catrecursos.descripcion, catrecursos.autor, catetiquetas.id, catetiquetas.etiquetaDescripcion FROM catrecursos INNER JOIN unionetiquetascatrecurso on catrecursos.id = unionetiquetascatrecurso.idRecurso INNER JOIN catetiquetas on unionetiquetascatrecurso.idEtiqueta = catetiquetas.id WHERE unionetiquetascatrecurso.idEtiqueta = :etiqueta" */

            return $pdo->fetchAll();
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function verRecursoM($codigo){
        try {
            
            $pdo = conexionBD::conexion()->prepare("SELECT catrecursos.id, catrecursos.nombre, catrecursos.ruta, catrecursos.titulo, catrecursos.descripcion, catrecursos.autor, catetiquetas.etiquetaDescripcion, catrecursos.tipo, catrecursos.resumen FROM catrecursos INNER JOIN unionetiquetascatrecurso on catrecursos.id = unionetiquetascatrecurso.idRecurso INNER JOIN catetiquetas on unionetiquetascatrecurso.idEtiqueta = catetiquetas.id WHERE catrecursos.id = :id and catetiquetas.id = 13");
            $pdo->bindParam("id",$codigo,PDO::PARAM_INT);
            $pdo->execute();

            return $pdo->fetchAll();
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
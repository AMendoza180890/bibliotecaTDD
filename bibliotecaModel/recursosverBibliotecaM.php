<?php
require_once '../Admin/modelo/conexionBD.php';

class recursoverBibliotecaM extends conexionBD
{

    public static function verRecursoM($codigo)
    {
        try {

            $pdo = conexionBD::conexion()->prepare("SELECT DISTINCT catrecursos.id, catrecursos.nombre, catrecursos.ruta, catrecursos.titulo, catrecursos.descripcion, catrecursos.autor, catetiquetas.etiquetaDescripcion, catrecursos.tipo, catrecursos.resumen FROM catrecursos INNER JOIN unionetiquetascatrecurso on catrecursos.id = unionetiquetascatrecurso.idRecurso INNER JOIN catetiquetas on unionetiquetascatrecurso.idEtiqueta = catetiquetas.id WHERE catrecursos.id = :id and catetiquetas.id = 13");
            $pdo->bindParam("id", $codigo, PDO::PARAM_INT);
            $pdo->execute();

            return $pdo->fetchAll();
        } catch (Exception $ex) {
            echo 'Error -' . $ex;
        }
    }
}

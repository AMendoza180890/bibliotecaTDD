<?php
require_once 'conexionBD.php';
class dashboardHomeM extends conexionBD{
    public static function dashboardRecursosM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT count(id) as total FROM catrecursos");
            if ($pdo->execute()) {
                return $pdo->fetch();
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
    
    Public static function dashboardUsuariosM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT count(id) as total FROM usuarios");

            if ($pdo->execute()) {
                return $pdo->fetch();
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function dashboardUsuariosInvitadosM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT count(id) as total FROM usuarios WHERE rolid = 2");

            if ($pdo->execute()) {
                return $pdo->fetch();
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function dashboardUsuariosAdministradoresM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT count(id) as total FROM usuarios WHERE rolid = 1");

            if ($pdo->execute()) {
                return $pdo->fetch();
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public static function dashboardRecursosPorCategoriasM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT catetiquetas.etiquetaDescripcion as etiqueta, count(catrecursos.id) as total FROM catrecursos inner join unionetiquetascatrecurso on catrecursos.id = unionetiquetascatrecurso.idRecurso inner join catetiquetas on unionetiquetascatrecurso.idEtiqueta = catetiquetas.id group by catetiquetas.etiquetaDescripcion");

            if ($pdo->execute()) {
                return $pdo->fetchAll();
            }
        } catch (exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
?>
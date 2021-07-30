<?php
    include_once 'Admin/modelo/conexionBD.php';
    class ayudaVisitaModel extends conexionBD{
        
        public static function cargarInfoAyudaM(){
            try {
                $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcion, estado FROM artayuda");
                $pdo->execute();

                return $pdo->fetch();

            } catch (exception $ex) {
                echo 'error: '.$ex->getMessage();
            }
        }
    }
?>
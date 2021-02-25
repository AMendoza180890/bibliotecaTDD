<?php

require_once "ConexionBD.php";

class UsuariosM extends ConexionBD{

	//Ingresar al gestor

	static public function IngresoUsuariosM($datosC, $tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, foto, rol, id FROM $tablaBD WHERE usuario = :usuario");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();

	}


}
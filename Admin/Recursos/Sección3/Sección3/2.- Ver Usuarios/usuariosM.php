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


	//Ver Usuario
	static public function VerUsuariosM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, foto, rol FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}
<?php

class UsuariosC{

	//Ingresar
	public function IngresoUsuariosC(){

		if(isset($_POST["usuario-Ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

				$datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);

				$tablaBD = "usuarios";

				$respuesta = UsuariosM::IngresoUsuariosM($datosC, $tablaBD);

				if($respuesta["usuario"] == $_POST["usuario-Ing"] && $respuesta["clave"] == $_POST["clave-Ing"]){

					$_SESSION["Ingreso"] = true;

					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["usuario"] = $respuesta["usuario"];
					$_SESSION["clave"] = $respuesta["clave"];
					$_SESSION["foto"] = $respuesta["foto"];
					$_SESSION["rol"] = $respuesta["rol"];

					echo '<script>

						window.location = "inicio";
						</script>';

				}else{

					echo 'ERROR AL INGRESAR';

				}

			}

		}

	}


	// Ver Usuarios
	public function VerUsuariosC(){

		$tablaBD = "usuarios";

		$respuesta = UsuariosM::VerUsuariosM($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<tr>
                  
	                <td>'.($key+1).'</td>
	                <td>'.$value["usuario"].'</td>
	                <td>'.$value["clave"].'</td>';

	                if($value["foto"] != ""){

	                	echo '<td>

	                <img src="$value["foto"]" class="user-image" alt="User Image" width="40px;"></td>';
	                }else{

	                	echo '<td>

	                <img src="Vistas/img/usuarios/defecto.png" class="user-image" alt="User Image" width="40px;"></td>';

	                }
	                

	                echo '<td>'.$value["rol"].'</td>

	                <td>
	                  
	                  <div class="btn-group">
	                    
	                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>

	                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

	                  </div>

	                </td>

	              </tr>';


		}

	}


}
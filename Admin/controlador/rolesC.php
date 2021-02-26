<?php

class rolesUsuarioC{
    public function mostrarRolesUsuarioC(){
        try {
            $listadeRoles = rolesUsuarioM::mostrarRolesUsuario();

            if ($listadeRoles) {
                foreach ($listadeRoles as $key => $value) {
                    echo '<option value="'.$value["rolid"].'">'.$value["catRolesDescripcion"].'</option>';
                }
            }

        } catch (Exception $ex) {
            echo "Error -".$ex;
        }
    }
}
?>
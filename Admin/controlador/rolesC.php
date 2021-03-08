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

    // public static function setRolesUsuarioC($idUsuario){
    //     try {
    //         if ($idUsuario != null) {
    //                 $setRolActual = rolesUsuarioM::setRolesUsuarioM($idUsuario);
    //                 $listadeRoles = rolesUsuarioM::mostrarRolesUsuario();

    //             if ($listadeRoles) {
    //                 foreach ($listadeRoles as $key => $value) {
    //                     if ($value["rolid"] == $setRolActual) {
    //                         echo '<option value="'.$value["rolid"].'" selected>'.$value["catRolesDescripcion"].'</option>';
    //                     }else{
    //                         echo '<option value="'.$value["rolid"].'">'.$value["catRolesDescripcion"].'</option>';
    //                     }

    //                 }
    //             }
    //         }
    //     } catch (Exception $ex) {
    //         echo "Error - ".$ex;
    //     }
    // }
}
?>
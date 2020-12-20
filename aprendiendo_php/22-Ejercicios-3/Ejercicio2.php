<?php

/* Ejercicio 2
1 debe tener una funcion
2 la funcion dbe validar un email con filter_var
3 recoger variable por get y validarla
4 mostrar el resultado*/

function validarCorreo($correo){

    $status = "No valido";

    if(!empty($correo) && filter_var($correo , FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }

    return $status;
}

if(isset($_GET['correo'])){
    
    echo validarCorreo($_GET['correo']);

}else{

    echo"pasa por get un email";
}

?>
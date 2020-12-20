<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';
    /*con la funcion real_escape_string se le da seguridad a la integridad de los datos
    dado que al insertar comillas , en este se puede ejecutar un sql inyecction*/

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    //array de errores
    $errores = array();
    //validacion de datos antes de ingresarlos a la base de datos

    //validacion del campo nombre 
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        echo "el nombre es valido";
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "el nombre no es valido";
    }
    //validacion del campo apellido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        echo "el apellido es valido";
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellido'] = "el apellido no es valido";
    }

    //validacion del campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "el email es valido es valido";
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "el email no es valido";
    }

    if (count($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        //comprobar si el email existe en la base de datos
        $sql = "SELECT ID,EMAIL FROM  USUARIO WHERE EMAIL = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        //validacion del id del correo de usuario registrado con el que se va a modificar
        if ($isset_user['ID'] == $usuario['ID'] || empty($isset_user)) {
            //actualizar al usuario en la base de datos
            $sql = "UPDATE USUARIO SET 
                        NOMBRE = '$nombre',
                        APELLIDO = '$apellido',
                        EMAIL = '$email'
                        WHERE ID = ".$usuario['ID'];
            $guardar = mysqli_query($db, $sql);


            if ($guardar) {
                //se actualizan los datos del usuario que se muestran en la vista de modificacion de datos
                $_SESSION['usuario']['NOMBRE'] = $nombre;
                $_SESSION['usuario']['APELLIDO'] = $apellido;
                $_SESSION['usuario']['EMAIL'] = $email;
                $_SESSION['completado'] = "La actualizacion de datos se ha completado con exito";
            } else {
                $_SESSION['errores']['general'] = "falla al actualizar los datos del usuario";
            }
        } else {
            $_SESSION['errores']['general'] = "El usuario ya existe";
        }
    } else {

        $_SESSION['errores'] = $errores;
    }
} else {
    
}

header('Location: mis-datos.php');
?>




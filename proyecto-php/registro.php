<?php


if(isset($_POST)){

    require_once 'includes/conexion.php';


    if(!isset($_SESSION)){
    session_start();
    }
    /*con la funcion real_escape_string se le da seguridad a la integridad de los datos
    dado que al insertar comillas , en este se puede ejecutar un sql inyecction*/
    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db,$_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $pass = isset($_POST['pass']) ? mysqli_real_escape_string($db,$_POST['pass']) : false;

    //array de errores

    $errores = array();


    

    //validacion de datos antes de ingresarlos a la base de datos


    //validacion del campo nombre 
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre) ){
        echo "el nombre es valido";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "el nombre no es valido";
    }

    //validacion del campo apellido

    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/",$apellido) ){
        echo "el apellido es valido";
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellido'] = "el apellido no es valido";
    }

    //validacion del campo email

    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL) ){
        echo "el email es valido es valido";
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "el email no es valido";
    }

    if(!empty($pass) ){
        echo "el password es valido";
        $pass_validado = true;
    }else{
        $pass_validado = false;
        $errores['pass'] = "el password no es valido";
    }

    if(count($errores) == 0){
        $guardar_usuario = true;

        //cifrar la contraseña
        $pass_segura = password_hash($pass,PASSWORD_BCRYPT,['cost'=>4]);
        //compara las contraseñas para que sean iguales al momento de la insercion
        //password_verify($pass,$pass_segura);
        //insertar nuevo usuario en la base de datos
        $sql = "INSERT INTO USUARIO VALUES(NULL,'$nombre','$apellido','$email','$pass_segura',CURDATE());";
        $guardar = mysqli_query($db,$sql);

       

        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
                $_SESSION['errores']['general'] = "falla al insertar nuevo usuario";

        }


    }else{

        $_SESSION['errores'] = $errores;
        
    }
}

header('Location: index.php');

?>
<?php
//primero se debe iniciar la sesion para comenzar con la validacion del inicio de sesion
//iniciar tambien la conexion a la base de datos

require_once 'includes/conexion.php';

//recoger datos del formulario
if (isset($_POST)) {

    //borrando error antiguo para un inicio de sesion limpio
    if (isset($_SESSION['error_login'])) {

        unset($_SESSION['error_login']);
    }


    $email = trim($_POST['email']);
    $pass = $_POST['pass'];

    //consulta para comprobar las credenciales del usuario (email y password)

    $sql = "SELECT * FROM USUARIO WHERE EMAIL='$email'";
    //se declara variable en la cual se almacena la query realiazada y la conexion a la bd
    $login = mysqli_query($db, $sql);

    /*se declara una condicional en la cual se valida si la variable login que contiene
    la query y la conexion a la bd ,se compara con la funcion mysqli_num_rows($login) == 1 
    significa que cuenta la cantidad de filas que devuelve la consulta  */
    if ($login && mysqli_num_rows($login) == 1) {
        /*si es verdadero en la comparacion entra en la consulta 
        se declara la variable usuario en el cual se utiliza la funcion
        mysqli_fetch_assoc($login) el cual entrega un array asociativo
        el cual extrae de la bd*/
        $usuario = mysqli_fetch_assoc($login);
        /*comprobar la password 
        se declara la variable verify en la cual
        se utiliza la funcion password_verify($pass,$usuario['password'])
        en la cual la primera variable es la pass entregada por el formulario
        en la segunda es la variable usuario en la cual extrae de la bd 
        la password del usuario registrado */
        $verify = password_verify($pass, $usuario['password']);
        /*si verify da verdadero entonces es que el usuario esta logueado
           lo que quiere decir que las credenciales(email y password) coinciden 
           de manera correcta y ademas se comprobo su integridad*/
        if ($verify = true) {
            //utilizar una sesion para guardar los datos del usuario logueado
            /*aca se declara una variable sesion y se le asigna la variable usuario
            declarada la cual obtiene un array asociativo de la consulta obtenida en la base de datos
            */
            $_SESSION['usuario'] = $usuario;
        } else {
            //si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "login incorrecto";
        }
    } else {
        $_SESSION['error_login'] = "login incorrecto";
    }
}
//redirigir al index.php

header('Location: index.php');

<?php
$error = 'Faltan_datos';
//aca se debe validar los campos que no esten vacios 
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['correo']) && !empty($_POST['contra'])) {

    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int)$_POST['edad'];
    $correo = $_POST['correo'];
    $pass = $_POST['contra'];


    //aca se valida que sea un string y que no sea un numero o algun otro caracter
    //validando de manera inversa validando que no sea un string y que no cumpla con lo demas caracteres

    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'nombre';
    }
          //aca se ocupa una expresion regular en la cual se verifica que la
          //informacion ingresada se valida negando que no sea un string o que devuelva
          //una coincidencia con la cadena que se esta comparando preg_match
    if (!is_string($apellido) || preg_match("/[0-9]/", $apellido)) {
        $error = 'apellido';
    }

    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = 'correo';
    }

    if (empty($pass) || strlen($pass) < 5) {
        $error = 'pass';
    }
/*var_dump($_POST);
var_dump($error);
die();*/

} else {
    $error = 'Faltan_datos';
}



if ($error != 'ok') {

    header("Location:index.php?error=$error");
}
?>


<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Validacion de formularios por PHP</title>
    </head>
    <body>
        <h1>Datos validados correctamente</h1>

<?php if ($error == 'ok'): ?>
            <p><?= $nombre ?></p>
            <p><?= $apellido ?></p>
            <p><?= $edad ?></p>
            <p><?= $correo ?></p>

<?php endif; ?>

    </body>
</html>


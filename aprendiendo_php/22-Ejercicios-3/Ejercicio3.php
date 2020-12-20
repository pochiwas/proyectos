<?php

/* Ejercicio 3
Hacer una interfaz de usuario(formulario)
2 inputs y 4 botonos con las operaciones basicas
y mostrar el resultado por pantalla*/

//se comienza valindando los parametros obtenidos por post
//para comprobar que tenemos los parametros necesarios para realizar las operaciones necesarias

$resultado = false;

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
}
//se validan si nos llega por post la operacion de suma, resta, multiplicacion o division
if (isset($_POST['sumar'])) {
    $resultado = "El resultado es: " . ($_POST['numero1'] + $_POST['numero2']);
}

if (isset($_POST['restar'])) {
    $resultado = "El resultado es: " . ($_POST['numero1'] - $_POST['numero2']);
}

if (isset($_POST['multiplicar'])) {
    $resultado = "El resultado es: " . ($_POST['numero1'] * $_POST['numero2']);
}

if (isset($_POST['dividir'])) {
    $resultado = "El resultado es: " . ($_POST['numero1'] / $_POST['numero2']);
}
?>

<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Calculadora</title>
</head>

<body>

    <h1>Calculadora en PHP</h1>

    <form method="POST" action="">
        <h3>Ingresa 2 numeros para las operaciones basicas</h3>

        <label>Primer digito : </label><br />
        <input type="number" name="numero1"><br />

        <label>Segundo digito : </label><br />
        <input type="number" name="numero2"><br />
        <br />

        <input type="submit" value="Sumar" name="sumar" /><br />
        <input type="submit" value="Restar" name="restar" /><br />
        <input type="submit" value="Multiplicar" name="multiplicar" /><br />
        <input type="submit" value="Dividir" name="dividir" />
    </form>

    <?php
    if ($resultado != false) :
        echo "<h2>$resultado</h2>";
    endif;
    ?>
</body>

</html>
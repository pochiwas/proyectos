<?php
/*Crear una sesion que aumente su valor en 1 o disminuya en funcion de que el  parametro
get counter este a uno o a cero.*/

//se inicia la sesion para comenzar a tener la variable viva dentro de la sesion
session_start();
//se declara la variable sesion numero y ademas se valida en que si la variable sesion no existe
//entonces que inicialize la variable sesion en 0
if(!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
}

//aca se valida el contador obtenido por metodo get el cual se verifica que el contador exista y 
//dependiendo de la condicion se aumenta o decrementa
if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION["numero"]++;
}
if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION["numero"]--;
}

?>
<!--aca se redirige a la misma pagina salvo que en la redireccion estamos entregando
el valor de variable counter dependiendo de lo que se necesite ya sea incremento o decremento---->
<h1>Valor de la sesion numero es : <?=$_SESSION['numero']?></h1>
<a href="Ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="Ejercicio1.php?counter=0">Disminuir el valor</a>

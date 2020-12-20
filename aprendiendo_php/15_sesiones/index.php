<?php

/* 
sesion:almacenar y persistir datos del usuario  mientras que navega  en un sitio web 
 * hasta que cierra sesion o cierra el navegador web
 * 
 */


//iniciar la sesion

session_start();

//variable local
$variable_norm="soy cadena de texto";


//variable de sesion
$_SESSION['variable_persistente']="hola soy una sesion activa";



//la variable sesion se puede ocupar en otros ficheros del proyecto
//siempre y cuando no pase por el comando session_destroy(); quien es aquel que termina la sesion de manera definitva
//hasta que se vuelva a iniciar la sesion

session_destroy();
?>
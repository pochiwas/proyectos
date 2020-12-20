<?php

/* 
para mostrar el valor de las cookies ,tengo que usar $_cookie, una variable
 * superglobal, es un array asociativo
 */



if (isset($_COOKIE['micookie'])) {
    echo"<h1>".$_COOKIE['micookie']."</h1>";
    
}else{
    echo"<h3>No existe ninguna cookie</h3>";
}
if (isset($_COOKIE['unyear'])) {
    
    echo"<h1>".$_COOKIE['unyear']."</h1>";
    
}else{
    echo"<h3>no Existe tal cookie</h3>";
}

?>
<a href="borrar_cookie.php"> Borrar las cookies </a>



<?php

/* 
COOKIES:TODOS LOS SERVICIOS GRANDES DE INTERNET ALMACENAN COOKIES, YA QUE ALMACENAN DATOS DE USUARIO DE DIVERSOS TIPOS
 * LAS COOKIES SE ALMACENAN EN DATOS CACHE
 * LAS COOKIES SE ALMACENAN EN EL NAVEGADOR INCLUSO SI ESTE ESTA CERRADO
 * SIRVEN PARA GUARDAR LOS DATOS DE INICIO DE SESION
 * SE UTILIZAN TAMBIEN PARA GUARDAR DATOS POR MUCHO MAS TIEMPO Y ADEMAS SE PUEDE UTILIZAR PARA HACER UN RASTREO DE INFORMACION
 * 
 */


//PARA CREAR COOKIES

//setcookie("nombre","Valor que solo puede ser texto",caducidad,ruta,dominio);
setcookie("micookie", "valor de mi galleta");

//cookie con expiracion

setcookie("unyear", "Valor de mi cookie de 365",time()+(60*60*24*365));

//redireccion de la pagina a la indicada ver_cookies.php

header('Location:ver_cookies.php');
?>



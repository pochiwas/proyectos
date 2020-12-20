<?php

/* 
Metodo para eliminar una cookie
 * se elimina y tambien se debe caducar su uso
 * para que deje de funcionar y se pueda eliminar */

if ($_COOKIE['micookie']){
unset($_COOKIE['micookie']);
setcookie('micookie', '',time()-100);
}

header('Location:ver_cookies.php');
?>

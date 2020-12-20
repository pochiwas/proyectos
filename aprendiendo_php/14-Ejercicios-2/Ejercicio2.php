<?php

/* 
realizar un programa que añada valores a un array y que su longitud sea menor a 120
 * 
 * y luego mostrarlo por pantalla
 * 
 */

$numero = array();

for($i = 0;$i < 120;$i++){
    
    array_push($numero,$i);
}
var_dump($numero);

?>


<?php

/* 
 * crear un script en php
 * que contenga 4 variables
 * array
 * string
 * int boolean
 * y que imprima un mensaje segun el tipo de varibale
 * 
 * 
 */

$array = array();
$numero = 10;
$string = "esto es un string";
$bool = true;


if (is_string($string)) {
    
    echo"Esta variable es un string => $string";
}elseif (is_int($numero)) {
    
    echo "Esta variable es un int => $numero ";
}elseif(is_bool($bool)){
    
    echo"esta es una variable booleana $bool"; 
}elseif(is_array($array)){
    echo "esta variable es un arraylist $array";
    
}

?>

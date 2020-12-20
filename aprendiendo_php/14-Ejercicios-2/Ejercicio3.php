<?php

/* 
 realizar un programa que valide si una variable esta vacia
 * y ademas de estar vacia rellenarlar con texto en minusculas
 * y mostrarla en mayusculas y en negrita
 * 
 */

$texto1="";
$texto2="esto es un string";



if (empty($texto1)) {
    echo"Esta variable esta vacia se ha rellenado con texto de prueba</br>";
    echo $texto1 = strtolower($texto2)."</br>";
    echo "ahora se coloca en negrita y mayusculas". strtoupper($texto1);
}

?>

<?php

$cantantes = ['2pac','Luis Miguel','Naruto','Jennifer Lopez','Alfredo'];
$numeros = [1,2,4,5,7,6,9];

//ordenar
asort($cantantes);
sort($cantantes);
arsort($cantantes);

//añadir elementos a un array

$cantantes[] = "Mercury";
array_push($cantantes , "Zion");

//Eliminar elementos de un array

array_pop($cantantes);
unset($cantantes[2]);

//sacar elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta a un array

var_dump(array_reverse($numeros));


//buscar en un array

$resultado = array_search('Mercury', $cantantes);
echo $resultado;

//contar numero de elementos dentro del array

echo count($cantantes);
echo sizeof($cantantes);





?>
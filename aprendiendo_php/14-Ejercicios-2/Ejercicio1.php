<?php

/* 
 hacer un programa en php que tenga un array con 8 numeros enyeros y que
 * haga lo sgte
 * 1 tiene que correr el array y mostrarlo
 * 2 ordenarlo y mostrarlo
 * 3 mostrar longitud 
 * 4 buscar algun elemento dentro del array
 * 
 * 
 */


//funcion

function mostrarArray($numeros){
    
    
    
    $resultado = " ";
    foreach ($numeros as $numero) {
        
        
       $resultado.=$numero."</br>";
        
    }
    
    return $resultado;
}


//crear el array
$numeros = array(20,49,13,23,87,45);

//mostrando array
echo"<h1>mostrando el array, recorriendo el array</h1>";

echo mostrarArray($numeros);

echo"<br>";


//mostrando array ordenado
echo"<h1>Array Ordenado</h1>";

sort($numeros);
echo mostrarArray($numeros);

//mostrando la longitud del array
echo"<h1>longitud del array</h1>";

echo sizeof($numeros);

//busqueda en el array


$busqueda = 20;
echo"<h1>Busqueda en el array DEL NUMERO $busqueda</h1>"; 
$search = array_search($busqueda, $numeros);

if (!empty($search)) {
    echo"<h4>el numero buscado existe en el array,ubicado en el indice $search</h4>";
}else{
    echo"<h4>no existe el numero buscado</h4>";
}



?>
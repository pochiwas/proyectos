<?php

/* 
Funciones:son aquellos bloques de codigo que al llamar generan algo en concreto y 
 * no tener que estar repitiendo el codigo reiteradas veces,se puede invocar las veces que sea necesaria
 * invocando la funcion con el nombre indicado a dicha fucnion
 */

/*definicion de funcion

 * function nombreDeMiFuncion($parametro){
 * 
 *      bloque/conjunto de instrucciones
 * } */

 //ejemplo de funciones


function muestraNombres(){
    echo"Elias";
    echo"Elias";
    echo"Elias";
    echo"Elias";
    echo"Elias";
    echo"Elias";
    
}


//ejemplo2 tabla de multiplicar


function tabla($numero){
    
    echo"<h3> Tabla de Multiplicar del Numero: $numero </h3>";
    
    for($i =1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo"$numero x $i = $operacion </br>";
    }
}


//tabla(4);



if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
}

//Ejemplo 3


function calculadora($numero1,$numero2){
    
    //conjunto de instrucciones a ejecutar
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    echo "El resultado de la suma es $suma </br>";
    echo "El resultado de la resta es $resta </br>";
    echo "El resultado de la Multiplicacion es $multiplicacion </br>";
    echo "El resultado de la Division es $$division </br>";
    
    
    
   
}

calculadora(4,5);


 
?>

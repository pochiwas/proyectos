<?php

//condicionales

//IF:
/*if(condicion){
instrucciones
 }else{
  otras instrucciones
  } */

//operadores de comparacion
//== igual
//=== identico
// != diferente
// <> diferente
// !== no identico
// < menor que
// > mayor que
// <= menor o igual que
// >= mayor o igual que



//operadores Logicos

//&& AND YY
//|| OR O 
//! NOT NO



//Ejemplo 1
$color = "rojo";

if ($color =="rojo") {
    
    echo "el color el rojo";
    
    
}else{
    
    echo "el color no es rojo";
    
}

echo"<hr/>";


//Ejemplo 2

$edad = 18;

if ($edad >= 18) {
    
    echo "es mayor de edad";
}else  {
    echo"es menor de edad";
    
}
echo "<hr/>";

//Ejemplo 3

$dia = 3;

if ($dia == 1) {
    echo "Es Lunes";
}elseif($dia == 2){
    echo"Es Martes";
}elseif($dia == 3){
    echo"Es Miercoles";
}elseif($dia == 4){
    echo "Es Jueves";
}elseif($dia == 5){
    echo"Es Viernes";
}elseif($dia == 6){
    echo"Es Sabado";
}elseif($dia == 7){
    echo "Es Domingo";
}else{
    echo"numero no corresponde a ningun dia de la semana";
}

echo "<hr/>";

//ejemplo switch

$dia2 = 4;
switch ($dia){
case 1:
    echo"Es Lunes";
    break;
case 2:
    echo"Es Martes";
    break;
case 3:
    echo "Es Miercoles";
    break;
case 4:
    echo"Es Jueves";
    break;
case 5:
    echo"Es Viernes";
    break;
case 6:
    echo"Es Sabado";
    break;
case 7:
    echo"Es Domingo";
    break;
default:
    echo"Numero no corresponde a algun dia de la semana ";
}
echo "<hr/>";

//Ejemplo 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;


if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    
    echo "Esta en edad de trabajar";
}else{
    echo"No estaria en Edad de Trabajar";
}

echo "<hr/>";

?>
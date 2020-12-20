<?php
//Bucle o Ciclo While

//estructura de control que itera o repite que la ejecucion de instrucciones tantas veces como sea necesario hasta que la condicion no se cumpla

$numero = 0;

while ($numero <= 100){
    
    echo $numero ;
    if ($numero != 100) {
        echo " ,";
    }
    
    $numero++;
}
echo "<hr/>";

//Ejemplo Tabla de Multiplicar

if (isset($_GET['numero'])) {
    //CAmbiar tipo de dato
    $numero =(int)$_GET['numero'];
    
}else  {
    
    $numero = 1;
}

echo "<hr/>";

echo"<h1>Tabla de Multiplicar del numero $numero</h1>";

$contador = 0;

while($contador <= 12){
    echo"$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}



//ejemplo con do while
//bucle o ciclo que primero ejecuta un bloque de instrucciones y luego valida el ciclo
//este ciclo al menos se ejecuta una vez para validar la condicion

$edad = 18;
$contador = 0;
do{
    echo "Acceso a local Privado<br/>";
    $contador++;
    
}while($edad >= 18 && $contador <= 10);
?>

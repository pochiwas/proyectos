<?php



for($i=0;$i<=10;$i++){
    
    echo"$i<br/>";
}


//Ejemplo Tabla de Multiplicar

if (isset($_GET['numero'])) {
    //CAmbiar tipo de dato
    $numero =(int)$_GET['numero'];
    
}else  {
    
    $numero = 1;
}

echo "<hr/>";

echo"<h1>Tabla de Multiplicar del numero $numero</h1>";



for($contador = 1;$contador <= 12;$contador++){
    echo"$numero x $contador = ".($numero*$contador)."<br/>";
  
}

?>
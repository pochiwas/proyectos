<?php

/* 
Hacer un programa que muesre todos los numeros que estan entre 2 numeros ingresados
 * por el usuario a travez del metodo get
 * 
 */



if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    for($i = $numero1;$i <= $numero2; $i++){
        echo"<h4>$i</h4>";
    }
    
}else{
    
    echo "<h1>los parametros no existen</h1>";
     echo "<h1>el numero 1 debe ser menor al numero 2</h1>";
}




?>
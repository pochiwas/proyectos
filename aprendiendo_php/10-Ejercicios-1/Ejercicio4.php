<?php


/*Recoger 2 numeros por la url por el paramtero get
 * y realizar las operaciones basicas con esos 2 numeros
 * 
 */

if (isset($_GET['numero1'])&&isset($_GET['numero2'])) {
    

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo"<h1>Operaciones Basicas</h1>";

echo "Suma : ".($numero1+$numero2)."<br/>";
echo "Resta : ".($numero1-$numero2)."<br/>";
echo "Multiplicacion : ".($numero1*$numero2)."<br/>";
echo "Division : ".($numero1/$numero2)."<br/>";
}else{
    
 echo"Introduce correctamente los valores a travez de la URL";   
}

?>


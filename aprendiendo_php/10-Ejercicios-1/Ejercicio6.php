<?php

/* 
imprimir por pantalla todas las tablas de multiplicar 
 * y estas deben ser mostradas en una tabla html
 * 
 * 
 */

echo"<table border=''1><tr>";//inicio de la tabla

echo "<tr>";//inicio fila 1 de celdas


for($cabecera = 1;$cabecera <=10;$cabecera++){
    echo"<td>Tabla del numero $cabecera</td>";
}
echo"</tr>";//cierre fila 1 de celdas

echo"<tr>";//inicio fila 2
for($x=1;$x<=10;$x++){
     echo"<td>";
     
     for($i=1;$i<=10;$i++){
         
         echo"$x * $i = ".($x*$i)."</br>";
         
     }
     
     
     echo"</td>";
}

echo"</tr>";//cierre fila 2



echo "</table>";//fin de la tabla 


?>

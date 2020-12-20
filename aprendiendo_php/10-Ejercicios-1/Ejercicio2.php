<?php

/*sacar todos los numeros pares que hay del 1 al 100*/

for($contador = 1;$contador <= 100;$contador++){
    
    if ($contador%2 == 0) {
         
        echo "El numero$contador es par<br/>";
}else
     
    echo "El numero $contador es impar<br/>";
}

?>
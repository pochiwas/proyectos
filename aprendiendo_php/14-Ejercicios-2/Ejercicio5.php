<?php

/* 
 Crear un array con el contenido de una tabla
 * videojuegos
 * accion-gta-cod
 * aventuras-rayman-hitmal-assasins
 * deportes-fifa-pes-tennis
 * cada columna debe de ir en un fichero por separado
 * 
 */

$tabla = array(
    "ACCION" =>array("GTA5","CALL OF DUTTY","PUBG"),
    "AVENTURA" =>array("ASSASIN CREED","CRASH BANDICOOT","PRINCE O PERSIA"),
    "DEPORTES" =>array("FIFA20","PES20","TENNIS20")
);

//con el arrays_keys que se puede sacar el nombre de los indices de los array

$categorias = array_keys($tabla);

?>

<table border="1px">
    <tr>
        <?php foreach ($categorias as $tipo):?>
            
             <th><?=$tipo?></th>
        
        <?php endforeach;?>
    </tr>
    <tr>
        <td><?=$tabla['ACCION'][0]?></td>
        <td><?=$tabla['AVENTURA'][0]?></td>
        <td><?=$tabla['DEPORTES'][0]?></td>
    </tr>
    <tr>
        <td><?=$tabla['ACCION'][1]?></td>
        <td><?=$tabla['AVENTURA'][1]?></td>
        <td><?=$tabla['DEPORTES'][1]?></td>
    </tr>
    
</table>

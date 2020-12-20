<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*VALIDANDO SI EXISTEN Y RECIBIENDO PARAMETROS DE UN FORMULARIO A TRAVEZ DEL METODO GET
if (isset($_GET['titulo']) && isset($_GET['descripcion'])) {
    
    echo"<h3>".$_GET['titulo']."</h3>";
    echo"<h3>".$_GET['descripcion']."</h3>";
    
}
*/
//VALIDANDO Y RECIBIENDO DATOS A TRAVEZ DE POST
if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    
    echo"<h3>".$_POST['titulo']."</h3>";
    echo"<h3>".$_POST['descripcion']."</h3>";
    
}


?>
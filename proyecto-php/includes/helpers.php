<?php

function mostrarError($errores,$campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta ="<div class='alerta alerta-error'>".$errores[$campo]."</div>";

    }
    return $alerta;
}

function borrarErrores(){

    $borrado = false;
    
    if(isset($_SESSION['errores'])){
    $_SESSION['errores'] = null;
    $borrado = true;
    }

    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    if(isset($_SESSION['completado'])){
    $_SESSION['completado'] = null;
    $borrado = true;
    }

    
    
}


function conseguirCategorias($conexion){
    $sql ="SELECT * FROM CATEGORIA ORDER BY ID ASC;";
    $categorias = mysqli_query($conexion, $sql);
    
    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){

        $result = $categorias;
    }

    return $result;

}


function conseguirCategoria($conexion,$id){

    $sql ="SELECT * FROM CATEGORIA WHERE ID = $id;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();
    
    if($categorias && mysqli_num_rows($categorias) >= 1){

        $result = mysqli_fetch_assoc($categorias);
    }

    return $result;

}

function conseguirEntradas($conexion,$limit = null){
    /*se declara una variable conexion en la cual se genera la consulta a la base de datos
    en la cual se consulta lo sgte:
    *se consultan todas las entradas de todas las categorias,
    combinando las tablas con unner join y ordenando de manera descendente
    con un limite de maximo 4
    con esto se obtienen las ultimas entradas por categorias*/ 
    $sql = " SELECT E.*,C.NOMBRE AS 'CATEGORIA' 
             FROM ENTRADA E 
             INNER JOIN CATEGORIA C ON E.CATEGORIA_ID = C.ID 
             ORDER BY E.ID DESC ";
    /* se declara una variable entrada la cual indica la conexion
    a la base de datos y tambien la variable que contiene la consulta sql
    con esto entradas guarda el resultado de la consulta generada a la base de datos
    que debiese devolver un true o false dependiendo de la consulta
     */

     /*se modifica la funcion para optimizar su funcionalidad,se agrega el parametro
     limit para controlar la cantidad de entradas a mostrar en diferentes situaciones*/
    if($limit){
        $sql.= 'LIMIT 4;';
    }
    $entradas = mysqli_query($conexion,$sql);
    $resultado = array();
    /*se declara una variable resultado como array para guardar la informacion
    obtenida de la variable entradas*/
    /*se valida que si entradas*/
    if($entradas && mysqli_num_rows($entradas) >= 1){
        $resultado = $entradas;

    }


        return $resultado;    
}

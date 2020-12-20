<?php

//COMO CONECTAR A UNA BASE DE DATOS 
//datos necesarios para generar la conexion
//$conexion = mysqli_connect($host,$user,$password,$database,$port,$socket);
//los ultimos 2 de puerto y socket son opcionales 

$conexion = mysqli_connect('localhost','elias','','phpmysql');

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MySQL ha fallado: ".mysqli_connect_error();

}else{
    echo "Conexion realizada existosamente";
}

//consulta para configurar la codificacion de caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta select desde php

$consulta = mysqli_query($conexion , "SELECT * FROM NOTAS" );

$notas = mysqli_fetch_assoc($consulta);


while($nota = mysqli_fetch_assoc($consulta)){
//var_dump($notas);
echo $nota['DESCRIPCION'];
}


//INSERTAR DATOS EN LA BD DESDE PHP

$sql = "INSERT INTO NOTAS VALUES(NULL,'NOTA DESDE PHP','ESTO ES UNA NOTA DESDE PHP','AMARILLO')";
$insert = mysqli_query($conexion,$sql);
 
if($insert){
    echo"datos ingresados de manera exitosa";
}else{
    echo "Error: ".mysqli_error($conexion);
}



?>
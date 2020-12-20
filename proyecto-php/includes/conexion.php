<?php
//conexion a la base de datos por php
//en este caso se obtendra los datos del servidor a travez de variables
$server = 'localhost';
$usuario = 'root';
$password = '';
$database = 'blog';

$db = mysqli_connect($server,$usuario,$password,$database);

mysqli_query($db,"SET NAMES 'UTF8'" );


if(!isset($_SESSION)){
    session_start();
    }

?>
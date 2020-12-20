<?php
 $archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

//se valida la subida del tipo de imagen en este caso, se evalua el formato
if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    //aca se valida que si no hay una carpeta creada con ese nombre se crea dicha carpeta
    if(!is_dir('images')){
        mkdir('images', 0777);

    }
//aca se genera la operacion de mover y guardar el archivo con el nombre que se desee
//en este caso se selecciona la carpeta que se esta creando anteriormente y despues
//se concatena el nombre del archivo subido
//tmp_name corresponde a la ruta temporal del directorio donde se encuentra la imagen

    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    header("Refresh: 5; URL=index.php");
    echo "<h1>Imagen Subida Exitosamente</h1>";


}else{
    header("Refresh: 5; URL=index.php");
    echo"Sube un archivo de imagen correcto";
 }

?>
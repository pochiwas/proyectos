<?php
//para crear un directorio o carpeta
//ademas se crea una validacion para saber si al carpeta ya fue creada anteriormente
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777) or die ('no se puede crear la carpeta');
}else{
    echo"La carpeta ya existe";
}

/*eliminar un directorio
rmdir('mi_carpeta');
*/


//aca se abre el directorio y en  el cual se 
//se recorre con un ciclo en el cual muestra todos los archivos que contiene el directorio

if($gestor = opendir('./mi_carpeta')){

while(false !== ($archivo = readdir($gestor))){
    if($archivo !='.' && $archivo !='..'){   
    echo $archivo."<br/>";
        }
    }
}

?>
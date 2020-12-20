<?php
//abrir archivo
$Archivo = fopen("fichero_texto.txt","a+");

//leer archivo

//para recorrer todas las lineas del archivo se debe iterar en un ciclo
//para poder mostrar cada linea del fichero
while(!feof($Archivo)){
$contenido = fgets($Archivo);
echo $contenido."<br/>";
}


//escribir dentro del archivo

fwrite($Archivo,"Soy un texto metido desde php");



//cerrar el archivo

fclose($Archivo);


//para copiar un fichero 
copy('fichero_texto.txt','fichero_copiado.txt') or die ("Error al copiar");

//renombrar 
rename('fichero_copiado.txt','archivito.txt');

//eliminar ficheros

unlink('archivito.txt') or die ('error al eliminar el archivo');

//comprobar si un archivo existe o no

if(file_exists("fichero_texto.txt")){
    echo "el archivo existe";
}else{
    echo"el archivo no existe";
}
?>
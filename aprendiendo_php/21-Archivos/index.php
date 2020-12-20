<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario subida de archivos</title>

    </head>
    <body>
        <h1>Formulario Subida de Archivos</h1>

        <form method="POST" action="subir.php" enctype="multipart/form-data">

            
            <input type="file" name="archivo"/><br/>
            <input type="submit" name="enviar"/> 


        </form>

        <h1>Listado de imagenes</h1>
        <?php
        //aca se genera un listado de imagenes del directorio images directamente
        //se habre el directorio
        $gestor = opendir('./images');
        //aca se valida si el directorio es verdadero es que el directorio es valido
        if($gestor != false):
            //aca se recorre el directorio de archivos en el cual se guarda todo en la variable
            //images comparandola hasta que sea distina de falso
            while(($image = readdir($gestor)) !== false):
                //aca se lee la salida de directorio(..) y el directorio actual(.)
                if($image != '.' && $image != '..'):
                    //aca como ya estamos dentro del directorio , mostramos la imagen
                    //en la pagina con la etiqueta img,usando el atributo src 
                    //donde damos la ruta de la imagen en este caso el directorio
                    //y damos el nombre del archivo(imagen) con la variable image
                    //añadimos el tamaño y un salto de linea

                    echo "<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;

        endif;
        ?>
    </body>
</html>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO PHP Y HTML</title>
    </head>
    <body>
        
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre : </label>
            <input type="text" name="nombre"/></br>
            <label for="apellido">Apellido : </label>
            <input type="text" name="apellido"/>
            </br>
            <label for="checkbox">sexo : </label></br>
              Hombre :<input type="checkbox" name="hombre"/>
              Mujer :<input type="checkbox" name="mujer"/>
              </br>
                <label for="color">color : </label><BR/>
            <input type="color" name="color"/>
            </br>
              <label for="fecha">fecha : </label><BR/>
            <input type="date" name="fecha"/>
            </br>
             <label for="email">email : </label><BR/>
             <input type="email" name="email"/>
            </br>
             <label for="archivo">archivo : </label><BR/>
             <input type="file" name="archivo"/>
            </br>
             <label for="numero">numero : </label><BR/>
             <input type="number" name="numero"/>
            </br>
             <label for="contraseña">contraseña : </label><BR/>
             <input type="password" name="contraseña"/>
            </br>
             <label for="continente">continentes: </label><BR/>
             EUROPA :<input type="radio" name="continente" value="EUROPA"/><BR/>
             ASIA :<input type="radio" name="continente" value="ASIA"/><BR/>
             AMERICA DEL SUR :<input type="radio" name="continente" value="AMERICA DEL SUR"/><BR/>
             AFRICA :<input type="radio" name="continente" value="AFRICA"/><BR/>
            </br>
            <label for="WEB">WEB : </label><BR/>
             <input type="URL" name="WEB"/>
            </br>
            <label for="contraseña">contraseña : </label><BR/>
             <input type="password" name="contraseña"/>
            </br>
            <label>AREA DE TEXTO</label><br/>
            <textarea></textarea><BR/>
            
            
            Peliculas:
            <select>
                <option value="Spider-Man">Spider-Man</option>
                <option value="Batman">Batman</option>
                <option value="SuperMan">SuperMan</option>
                <option value="AquaMan">AquaMan</option>
                
                
            </select>
        </form>
    </body>
    
    
</html>


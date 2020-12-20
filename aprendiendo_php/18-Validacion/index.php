<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Validacion de formularios por PHP</title>
    </head>
    <body>
        
        <h1>Validacion de formularios en PHP</h1>
        
        
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'Faltan_datos') {
                echo "<strong style='color:red'>INTRODUCE 
                TODOS LOS DATOS NECESARIOS</strong>";
            }
            if ($error == 'nombre') {
                echo "<strong style='color:red'>INTRODUCE EL NOMBRE DE
                 MANERA CORRECTA</strong>";
            }

            if ($error == 'apellido') {
                echo "<strong style='color:red'>INTRODUCE 
                EL APELLIDO DE MANERA CORRECTA</strong>";
            }
            if ($error == 'edad') {
                echo "<strong style='color:red'>INTRODUCE 
                LA EDAD DE MANERA CORRECTA</strong>";
            }
            if ($error == 'correo') {
                echo "<strong style='color:red'>INTRODUCE 
                EL CORREO DE MANERA CORRECTA</strong>";
            }
            if ($error == 'pass') {
                echo "<strong style='color:red'>INTRODUCE 
                PASSWORD CORRECTAMENTE, MINIMO 5 CARACTERES</strong>";
            }
        }


        ?>

        
        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre:</label><br/>
            <input type="text" name="nombre" require="required" pattern="[a-zA-z]+" /><br/>
            <label for="apellido">apellido:</label><br/>
            <input type="text" name="apellido" require="required" pattern="[a-zA-z]+" /><br/>
            <label for="edad">Edad:</label><br/>
            <input type="text" name="edad"require="required" pattern="[0-9]" /><br/>
            <label for="correo">Correo:</label><br/>
            <input type="text" name="correo" require="required"  /><br/>
            <label for="contra">Contraseña:</label><br/>
            <input type="password" name="contra" require="required" /><br/>
            
            <input type="submit" value="Enviar"/>
            
        </form>
        
    </body>
</html>


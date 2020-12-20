

<!--barra lateral-->

<aside id="sidebar">

    <?php if (isset($_SESSION['usuario'])) : ?>
        <div id="usuario_logueado" class="bloque">
            <!--en la etiqueta de vista de php se llama mediante la variable sesion
            a los campos obtenidos por la consulta sql, en este caso es un array asociativo 
              en el cual esta la varianle sesion de usuario y en el otro index se obtiene el nombre y el apellido -->
            <h3>Bienvenido: <?= $_SESSION['usuario']['NOMBRE'] . ' ' . $_SESSION['usuario']['APELLIDO']; ?></h3>
            <!--botones-->
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesion</a>
            <a href="mis-datos.php" class="boton boton-naranja">Modificar Datos</a>
            <a href="crear-entrada.php" class="boton boton-verde">Crear Entradas</a>
            <a href="crear-categoria.php" class="boton">Crear Categoria</a>


        </div>
    <?php endif;?> 


   <!--LOGIN INICIO DE SESION--->
   <?php if (!isset($_SESSION['usuario'])) : ?>
    <div id="login" class="bloque">

        <h3>IDENTIFICATE</h3>
        <?php if (isset($_SESSION['error_login'])) : ?>
            <div class="alerta alerta-error">
                 <?=($_SESSION['error_login']);?>

            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <br />

            <label for="pass">Password</label>
            <input type="password" name="pass" />
            <br />

            <input type="submit" value="Enviar" />



        </form>

    </div>
    <?php endif; ?>


    <!--REGISTRO DE USUARIO-->
    <?php if (!isset($_SESSION['usuario'])) : ?>
    <div id="registro_u" class="bloque">
        <!--este paso se se valida el dato que esta guardado 
                en ela array errores guardado en la sesion--->

        <!--?php if(isset($_SESSION['errores'])) : ?-->
        <!--?php var_dump($_SESSION['errores']);?-->
        <!--?php endif; ?-->
        <h3>REGISTRATE COMO USUARIO</h3>
        <!--mostrar errores de insercion-->
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class='alerta alerta-exito'>
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class='alerta alerta-error'>
                <?= $_SESSION['errores']['general'] ?>
            </div>


        <?php endif; ?>


        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <br />
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
            <br />

            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <br />

            <label for="pass">Password</label>
            <input type="password" name="pass" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pass') : ''; ?>
            <br />

            <input type="submit" name="submit" value="Registrar" />



        </form>

        <?php borrarErrores(); ?>

    </div>
    <?php endif; ?>
    


</aside>
<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">
    <!--Caja Principal-->
    <h1>Mis Datos</h1>
    <?php if (isset($_SESSION['completado'])) : ?>
            <div class='alerta alerta-exito'>
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class='alerta alerta-error'>
                <?= $_SESSION['errores']['general'] ?>
            </div>


        <?php endif; ?>

            <!--en el atributo value se imprime los datos guardados del usuario en la sesion
            mostrando asi en los inputs los valores actuales del usuario-->
        <form action="actualizar-usuario.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['NOMBRE']?>" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <br />
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="<?=$_SESSION['usuario']['APELLIDO']?>" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
            <br />

            <label for="email">Email</label>
            <input type="email" name="email" value="<?=$_SESSION['usuario']['EMAIL']?>" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <br />

            

            <input type="submit" name="submit" value="Actualizar" />
    </form>


</div>
<!--Fin Principal-->
<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php';?>

<div id="principal">

        <h1>Crear Categorias</h1>
        <p>
                <strong>Añade nuevas categorias al blog para que los usuarios las puedan utilizar en 
                sus entradas</strong>
        </p>
        <br/>
        <form action="guardar-categoria.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre_categoria"/>

                        <input type="submit" value="Guardar"/>

        </form>

</div>



<?php require_once 'includes/footer.php';?>
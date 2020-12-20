<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php require_once 'includes/lateral.php';?>
<?php require_once 'includes/conexion.php';?>

<?php
$categoria_actual = conseguirCategoria($db, $_GET['id']);

if(!isset($categoria_actual['ID'])){
    /*Validando que la variable categoria_actual
    llegue con los datos establecidos anteriormente por la funcion
    conseguirCategoria quien es la que extrae la informacion de la base de datos 
    y la entrega mediante un array asociativo,del cual obtenemos todo lo necesario 
    para listar las categorias */
    header("Location: index.php");
}
?><!--CAJA PRINCIPAL--->

<div id="principal">
    <h1>Entradas de <?=$categoria_actual['NOMBRE']?></h1>

    <?php
    $entrada = conseguirEntradas($db);
    if(!empty($entrada)):
        while($entradas = mysqli_fetch_assoc($entrada)):
     ?>       

            <article class="entrada">
        <a href="">
            <h2><?=$entradas['TITULO']?>,<?=$entradas['FECHA']?></h2>
            <div>
                <img src="<?=$entradas['PORTADA_IMG']?>" width="300px" height="200px"/>
            </div>
            <p>
                <?=substr($entradas['DESCRIPCION'],0,180)."....."?>

            </p>
        </a>

    </article>
    <?php
        endwhile; 
    endif;
    ?>
    
</div>



<!--fin principal-->


<!--PIE DE PAGINA--->

<?php require_once 'includes/footer.php';?>


<?php require_once 'includes/cabecera.php'; ?>

        <!--BARRA LATERAL--->
<?php require_once 'includes/lateral.php';?>


        <!--CAJA PRINCIPAL--->

        <div id="principal">
            <h1>Todas las Entradas</h1>

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
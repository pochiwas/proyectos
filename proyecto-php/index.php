<?php require_once 'includes/cabecera.php'; ?>

        <!--BARRA LATERAL--->
<?php require_once 'includes/lateral.php';?>


        <!--CAJA PRINCIPAL--->

        <div id="principal">
            <h1>Ultimas Entradas</h1>

            <?php
            $entrada = conseguirEntradas($db, true);
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
            


            <div id="ver-todas">
                <a href="entradas.php">Ver todas las Entradas</a>
            </div>
        </div>


     
    <!--fin principal-->


    <!--PIE DE PAGINA--->

<?php require_once 'includes/footer.php';?>
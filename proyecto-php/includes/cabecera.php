<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Proyecto de php y mysql</title>
    <link rel="stylesheet" type="text/css" href="./assests/css/style2.css" />
</head>

<body>

    <!--CABECERA--->

    <header id="cabecera">

        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                Blog de videojuegos
            </a>

        </div>
        <!--MENU--->


        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">INICIO</a>
                </li>
                <?php $categorias = conseguirCategorias($db); ?>
                <?php if(!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['ID']?>"><?= $categoria['NOMBRE']?></a>
                    </li>

                <?php 
                endwhile;
                endif; ?>
                <li>
                    <a href="index.php">SOBRE MI</a>
                </li>
                <li>
                    <a href="index.php">CONTACTO</a>
                </li>
            </ul>


        </nav>
        <div class="clearfix"></div>

    </header>

    <div id="contenedor">
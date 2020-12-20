<?php


if (isset($_POST)) {
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria_id = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['ID'];
    //Validacion
    $errores = array();

    if (empty($titulo)) {
        $errores['titulo'] = "la entrada tiene que tener un titulo";
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = "la entrada tiene que tener una descripcion";
    }

    if (empty($categoria_id) && !is_numeric($categoria_id)) {
        $errores['categoria'] = "la categoria no es valida";
    }
    //var_dump($errores);

  

    if (count($errores) == 0) {

        $sql = "INSERT INTO ENTRADA VALUES(NULL,$usuario,$categoria_id,'$titulo','$descripcion',CURDATE(),null);";
        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    } else {
        $_SESSION['errores_entrada'] = $errores;
        header("Location: crear-entrada.php");
    }
}

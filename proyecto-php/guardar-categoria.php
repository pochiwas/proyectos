<?php
/*aca es bastante parecido al registro.php*/

if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/conexion.php';

    /** a esta accion se le llama ternaria dada la siguiente manera de la sintaxis
     * y de como trabaja la sentencia de codigo
     * $value = <operator> ? <true value> : <false value>
    */
    $nombre = isset($_POST['nombre_categoria']) ? mysqli_real_escape_string($db,$_POST['nombre_categoria']) : false;
    //echo "<h3>".var_dump($nombre)."</h3>";

    /**podemos hacer una comprobacion de errores 
     * un array de errores
     * validamos los datos antes de la base de datos
     */

     
    //array de errores
     $errores = array();
    //validacion de datos antes de guardalos en la base de datos
    //validar el cam
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){
        
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "el nombre no es valido";
    }
    
    if(count($errores) == 0){
        $sql = "INSERT INTO CATEGORIA VALUES(NULL ,'$nombre');";
       
        $agregar = mysqli_query($db,$sql);
       // echo "<h3>".var_dump($sql)."</h3>";
       // echo "<h3>".var_dump($agregar)."</h3>";
        //die();
       
      
    }

    

}

header("Location: index.php");
?>
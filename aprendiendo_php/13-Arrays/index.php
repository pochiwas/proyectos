<?php

/* 
Array es una coleccion de valores guardados en una matriz
 * en la cual se puede acceder a ella a travez de un numero numerico
 * o alfanumero el cual vendria siendo el indice del array o matriz de esta
 * 
 */

$pelicula ="Batman";

$peliculas  = array('Batman','Spider-Man','Kings Man');
$cantantes = ['2pac','Luis Miguel','Naruto','Jennifer Lopez'];
$personas = array(
    'nombre'=>'Elias',
    'apellidos'=>'Yañez',
    'web'=>'eliasyanez.cl'
    
);

echo $peliculas[0];
echo "<br>";
echo $cantantes[2];



//mostrar listado de los array
//recorrer los array con for y foreach

//ejemplo recorrer array con for
//se debe contar siempre el tamaño del array o arreglo el cual se va a recorrer
echo"<h1>Listados de Peliculas</h1>";
echo"<ul>";
//se debe colocar menor para que coincida con los indices, ya que al ser menor o mayor igual incluye un ciclo mas
//el cual no coincide con los indices utilizados por lo que genera un error
for($i = 0; $i < count($peliculas);$i++){


echo"<li>".$peliculas[$i]."</li>";
    
}


echo"</ul>";


echo"<hr>";

//ejemplo de recorrido de array con foreach


echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
    
    
    echo"<li>".$cantante."</li>";
} 
echo "</ul>";


//Array Alfanumerico o asociativos

echo"</ul>";


echo"<hr>";

//ejemplo de recorrido de array con foreach


echo "<h1>Listado de Personas</h1>";
echo "<ul>";
foreach ($personas as $persona) {
    
    
    echo"<li>".$persona."</li>";
} 
echo "</ul>";




//ejemplo Array Multidimensional

$contactos = array(
  array(
      'nombre'=>'Elias',
      'apellido'=>'Yañez'
  ) , 
    
     array(
      'nombre'=>'Luis',
      'apellido'=>'Pino'
  ) , 
    
     array(
      'nombre'=>'Sofia',
      'apellido'=>'Yañez'
  ) , 
);
echo"<hr>";

echo"<h1>Recorriendo array multidimensional con foreach</h1>";

echo"<ul>";
foreach ($contactos as $key => $contacto) {
    
    //var_dump($contacto);
   echo"<li>"; 
   echo"<h3>".$contacto['nombre']."</h3>";
   echo"</li>";
}
echo"</ul>";
?>

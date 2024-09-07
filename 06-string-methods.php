<?php include 'includes/header.php';

$texto = "El batracio amarillo";

echo strlen($texto);
echo '<br>';

var_dump($texto);
echo '<br>';

//eliminar espacios en blanco al principio y al final
$texto = trim($texto);
echo strlen($texto);
echo '<br>';


//convertir a mayúsculas
echo strtoupper($texto);
echo '<br>';
echo strtolower($texto);
echo '<br>';
echo str_replace('amarillo', 'rojo', $texto);
echo '<br>';

//comprobar si un string existe dentro de otro
echo strpos($texto, 'xp');
echo '<br>';

//concatenar strings
echo 'Título: ' . $texto . ' Publicado';
echo '<br>';

// aquí hay que utilizar comillas dobles
echo "Título {$texto} Publicado";

include 'includes/footer.php';
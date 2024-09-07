<?php include 'includes/header.php';

//declaración
$array1 = [];
$array2 = array();

$productos = ['cocacola', 'fanta', 'agua'];

//ver los elementos de un array
echo '<pre>';
var_dump($productos);
echo '</pre>';

//acceder a un elemento del array
echo $productos[1];
echo '<br>';

//agregar elementos
$productos[3] = 'casera';

//al final
array_push($productos, 'zumo');

//al inicio
array_unshift($productos, 'cerveza');


echo '<pre>';
var_dump($productos);
echo '</pre>';

include 'includes/footer.php';
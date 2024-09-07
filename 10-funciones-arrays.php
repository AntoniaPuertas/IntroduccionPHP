<?php include 'includes/header.php';


// in_array - buscar elementos en un arreglo, comprobar si existe
$frutas = ['fresa', 'piña', 'pera'];
var_dump( in_array('pera', $frutas) );


//ordenar elementos de un arreglo de menor a mayor
sort($frutas);
echo '<pre>';
var_dump($frutas);
echo '</pre>';

//ordenar elementos de mayor a menor
rsort($frutas);
echo '<pre>';
var_dump($frutas);
echo '</pre>';

//ordenar arreglo asociativo asort por los valores y arsort
$usuario = [
    'nivel' => 2,
    'nombre' => 'Pepe',
    'permisos' => [
        'cliente' => false,
        'administrador' => true
    ]
];

asort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';

//ordenar por llaves ksort y krsort
ksort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';

include 'includes/footer.php';
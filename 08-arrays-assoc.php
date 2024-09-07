<?php include 'includes/header.php';

//Los arreglos asociativos son muy similares a los objetos en javascript

$usuario = [
    'nombre' => 'Pepe',
    'nivel' => 2,
    'permisos' => [
        'administrador' => true,
        'cliente' => false
    ]
];

$usuario['id'] = 23;

echo '<pre>';
var_dump($usuario);
echo '</pre>';

 var_dump($usuario['permisos']['administrador']);



include 'includes/footer.php';
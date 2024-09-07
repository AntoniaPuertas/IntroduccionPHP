<?php include 'includes/header.php';

$usuarios = [];
$usuarios2 = array();
$usuarios3 = ['Pepe', 'Eva', 'Tomás'];

$usuario = [
    'nombre' => 'Pepe',
    'nivel' => 2,
    'permisos' => [
        'administrador' => true,
        'cliente' => false
    ]
];

//Empty comprueba si un arreglo está vacío
var_dump( empty($usuarios) );
echo '<br>';

var_dump( empty($usuarios3));
echo '<br>';

// Isset comprueba si un arreglo está creado o una propiedad está definida
var_dump( isset($usuarios4));
echo '<br>';

var_dump( isset($usuario['nivel']) );

include 'includes/footer.php';
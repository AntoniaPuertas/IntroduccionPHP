<?php include 'includes/header.php';

//For Each
$vehiculos = ['Coche', 'Avión', 'Camión', 'Moto'];

//para saber el número de elementos del array
echo count($vehiculos) . '<br>';
echo sizeof($vehiculos) . '<br>';

for($i = 0 ; $i < count($vehiculos) ; $i++){
    echo $vehiculos[$i] . '<br>';
}

for($i = 0 ; $i < count($vehiculos) ; $i++):
    echo $vehiculos[$i] . '<br>';
endfor;

//también se pueden eliminar las llaves en el if - endif
//y foreach - endforeach


foreach($vehiculos as $vehiculo){
    echo $vehiculo . '<br>';
}

//recorrer arreglos asociativos
$usuario = [
    'nombre' => 'Pepe',
    'nivel' => 2,
    'permisos' => 'Administrador'
];

//el foreach itera sobre los valores
foreach($usuario as $valor){
    echo $valor . '<br>';
}

foreach($usuario as $key => $valor){
    echo $key . ' - ' . $valor . '<br>';
}


$productos = [
    [
        'nombre' => 'libro',
        'precio' => 24,
        'disponible' => true,
        'oferta' => true
    ],
    [
        'nombre' => 'revista',
        'precio' => 18,
        'disponible' => true,
        'oferta' => false
    ],
    [
        'nombre' => 'periodico',
        'precio' => 3,
        'disponible' => false,
        'oferta' => false
    ]
];

echo '<div class="articulos">';
foreach($productos as $producto){
    ?>
    <article>
         <p>Producto: <?php echo $producto['nombre']; ?></p>
         <p>Precio: <?php echo $producto['precio'] . ' €'; ?></p>
         <p><?php echo $producto['disponible'] ? 'Disponible' : "No Disponible"; ?></p>
         <?php echo $producto['oferta'] ? '<p class="rebajado">Rebajado</p>' : ""; ?>
    </article>
    <?php
}
echo '</div>';

include 'includes/footer.php';
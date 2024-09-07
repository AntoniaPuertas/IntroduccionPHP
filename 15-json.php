<?php include 'includes/header.php';

//Los distintos lenguajes se comunican por medio de JSON
//JavaScript, React, Angular, Vue, Android... consumen datos JSON
//PHP también acepta y devuelve datos JSON

//arreglo asociativo
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
        'nombre' => 'Álbum pequeño',
        'precio' => 3,
        'disponible' => false,
        'oferta' => false
    ]
];

echo '<pre>';
var_dump($productos);
echo '</pre>';

//cuando hacemos una consulta a una base de datos podemos obtener los datos en un arreglo asociativo
//convertir un arreglo asociativo a JSON para enviar los datos a JavaScript
//json_encode convierte el arreglo en un string
//el segundo argumento es para que reconozca acentos y ñ
$productosJson = json_encode($productos, JSON_UNESCAPED_UNICODE);

echo '<pre>';
var_dump($productosJson);
echo '</pre>';

//convertir string json en arreglo asociativo
$productosAsociativo = json_decode($productosJson);
echo '<pre>';
var_dump($productosAsociativo);
echo '</pre>';


include 'includes/footer.php';
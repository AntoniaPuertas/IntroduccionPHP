<?php include 'includes/header.php';

// definir variables
$nombre = 'Pepito';
$nombre = 'Pepito junior';
$_nombre = 'Manolito';


echo $nombre;
echo '<br>';
var_dump($nombre);
echo '<br>';

// definir constantes o identificadores
define('nombre2'," Manolito junior");

echo nombre2;
echo '<br>';

// otra forma de definir constantes menos utilizada
const nombre3 = 'Manolito nieto';

echo nombre3;

include 'includes/footer.php';
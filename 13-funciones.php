<?php
declare(strict_types = 1);

include 'includes/header.php';
/**
 * declare(strict_types = 1);
 * activa el modo de tipado estricto para el archivo PHP en el que se declara
 * solo afecta al archivo en que se declara, no a los archivos incluidos
 * debe ser la primera instrucción en un archivo PHP sin contar la etiqueta de apertura <?php y los comentarios
 * cuando está activado realiza comprobaciones de tipo de parámetros y valores de retorno de las funciones
 * 
 */

 /**
  * Tipos de datos:
  * int
  * bool
  * string
  * float
  * array
  */

function sumar(int $n1, int $n2 = 0): void{
    echo $n1 + $n2 . '<br>';
}

sumar(4, 7);
sumar(60);
// sumar('hola', 4);

//funciones que retornan datos
function usuarioLogueado() : bool {
    return false;
}

$isLogueado = usuarioLogueado();

echo $isLogueado ? '<p>El usuario ha iniciado sesión</p>' : "<p>Acceso denegado</p>";

//parámetros nombrados a partir de la version 8
function sumar2(int $numero1, int $numero2): int{
    return $numero1 + $numero2;
}

//$resultado = sumar2(numero1: 2, numero2: 6);
$resultado = sumar2(2, 6);
echo $resultado;

include 'includes/footer.php';
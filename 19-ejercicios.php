<?php include 'includes/header.php';


/**
 * Crear un array con 8 números enteros
 * 1 - Recorrer el array y mostrarlo
 * 2 - Ordenar el array y mostrarlo
 * 3 - Mostrar su longitud
 * 4 - Buscar algún elemento
 * 5 - Añadirle valores al array mientras su longitud sea menor que 120
 * 6 - Mostrar el array
 */


 /**
  * Comprobar si una variable está vacía
  * Si está vacía rellenarla con texto en minúscula
  * Mostrar su contenido con texto en mayúscula y en negrita
  */

/**
 * Crear 4 variables, una de tipo string, int, array y bool
 * Mostrar por pantalla el tipo y valor de cada una
 */

/**
 * Crea un array con el contenido de la siguiente tabla
 * ACCION       AVENTURA            DEPORTES
 * GTA          ASSASINS            FIFA 19
 * COD          CRASH               PES 19
 * PUGB         Prince of Persia    MOTO GP 19
 * 
 * Mostrar el contenido en una tabla de html
 * 
 */

 $tabla = array(
    'ACCION' => array('GTA', 'COD', 'PUGB'),
    'AVENTURA' => array('ASSASINS', 'CRASH', 'Prince of Persia'),
    'DEPORTES' => array('FIFA 19', 'PES 19', 'MOTO GP 19')
 );

 echo "<table>";
 echo "<tr><th>Género</th><th>Juegos</th></tr>";
 
 foreach ($tabla as $genero => $juegos) {
     echo "<tr>";
     echo "<td>" . $genero . "</td>";
     echo "<td>" . implode(", ", $juegos) . "</td>";
     echo "</tr>";
 }
 
 echo "</table>";

    // array_map('count', $array) - aplica una función, en este caso count a cada elemento de $array y devuelve un array con los resultados
    //max($array) - devuelve el valor máximo de un array
    // Encontrar el máximo número de juegos en un género
    $max_juegos = max(array_map('count', $tabla));

    echo "<table>";
    
    // Generar encabezados de la tabla (géneros)
    echo "<tr>";
    foreach ($tabla as $genero => $juegos) {
        echo "<th>" . $genero . "</th>";
    }
    echo "</tr>";
    
    // Generar filas de juegos
    for ($i = 0; $i < $max_juegos; $i++) {
        echo "<tr>";
        foreach ($tabla as $juegos) {
            echo "<td>";
            if (isset($juegos[$i])) {
                echo $juegos[$i];
            } else {
                echo "&nbsp;"; // Espacio en blanco para celdas vacías
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";

include 'includes/footer.php';
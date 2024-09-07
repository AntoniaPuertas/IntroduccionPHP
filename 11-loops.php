<?php include 'includes/header.php';

//while
$i = 0;

while($i < 10){
    echo $i . '<br>';
    $i++; //incremento
}

while($i < 10):
    echo $i . '<br>';
    $i++; //incremento
endwhile;

echo '<br>';
//Do while
$i = 0;
do{
    echo $i . '<br>';
    $i++; //incremento
}while($i < 10);
echo '<br>';
// For
for($i = 0 ; $i < 10 ; $i++){
    echo $i . '<br>';
}

/**
 * FIZZ BUZZ
 * Si $i es múltiplo de 3 imprimir FIZZ
 * si $i es múltiplo de 5 imprimir BUZZ
 * si $i es múltiplo de 3 y de 5 imprimir FIZZ BUZZ
 */

 for($i = 1 ; $i < 100 ; $i++){
    if($i % 15 === 0){
        echo $i . ' - FIZZ BUZZ <br>';
    }
    elseif($i % 3 === 0){//elseif puede ir con o sin espacio else if
        echo $i . ' - FIZZ <br>';
    }elseif($i % 5 === 0){
        echo $i . ' - BUZZ <br>';
    }else{
        echo $i . '<br>';
    }
}

//extensión para llaves bracket pair color dlw

echo 'Otra solución <br>';
function fizzBuzz($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        $output = '';
        
        if ($i % 3 == 0) $output .= 'Fizz';
        if ($i % 5 == 0) $output .= ' Buzz';
        
        //condicional ternario
        //condición $output === ''
        echo $output === '' ? $i : "$i $output";
        echo "<br>";
    }
}

// Ejemplo de uso
fizzBuzz(1, 100);

include 'includes/footer.php';
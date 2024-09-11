<?php 
include 'includes/header.php';

$array1 = [0, 1, 2];

echo '<pre>';
   var_dump($array1);
echo '</pre>';

for($i = 0 ; $i < count($array1) ; $i++){
    echo 'Valor de i: ' . $i . ' Contenido del array: ' . $array1[$i] . '<br>';
}

$array2 = [
    [0, 1, 2],
    [0, 1, 2],
    [0, 1, 2]
];

//count($array2[$i])
for($i = 0 ; $i < count($array2) ; $i++){
    for($j = 0 ; $j < 3 ; $j++ ){
        echo $i . ' - ' . $j . ' / ';
    }
}
echo '<br>';

$array3 = [
    ['primero 0', 'primero 1', 'primero 2'],
    ['segundo 0', 'segundo 1', 'segundo 2'],
    ['tercero 0', 'tercero 1', 'tercero 2']
];

for($i = 0 ; $i < count($array3) ; $i++){
    for($j = 0 ; $j < count($array3[$i]) ; $j++){
        echo $array3[$i][$j] . ' ';
    }
    echo '<br>';
}
?>

<table>
    <thead>
        <th>Primera</th>
        <th>Segunda</th>
        <th>Tercera</th>
    </thead>
    <tbody>
        <tr>
            <td>primero 0</td>
            <td>primero 1</td>
            <td>primero 2</td>
        </tr>
        <tr>
            <td>segundo 0</td>
            <td>segundo 1</td>
            <td>segundo 2</td>
        </tr>
        <tr>
            <td>tercero 0</td>
            <td>tercero 1</td>
            <td>tercero 2</td>
        </tr>
    </tbody>
</table>

<?php
include 'includes/footer.php';
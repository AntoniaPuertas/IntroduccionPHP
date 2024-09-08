<?php 
include 'includes/header.php';

//recibimos los valores enviados por get
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

echo '<p>Hola '. $nombre . ' '. $apellidos .'</p>';




include 'includes/footer.php';?>
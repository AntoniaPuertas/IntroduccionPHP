<?php 
include 'includes/header.php';

//recibimos los valores enviados por get
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo '<p>Hola '. $nombre . ' '. $apellidos .'</p>';




include 'includes/footer.php';?>
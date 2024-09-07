<?php include ('includes/header.php');

/** *
* include
* Los paréntesis en la ruta son opcionales
* incluye otros archivos para evitar la repetición de código
* se debe colocar la ruta relativa
* require
* se puede utilizar require en vez de include
* también se pueden incluir paréntesis
* diferencias:
    * se puede configurar php para que en caso de error si se utiliza include ignore el error y siga ejecutando el código
* utilizar include cuando se incluyan otros templates
* utilizar require cuando se incluyan funciones necesarias para el funcionamiento de la app
* require_once
* igual que require pero comprueba si el archivo ya fué incluido y si es así ignora la línea de código
*/


//llamar a una función que está en otro archivo
require 'funciones/funciones.php';
iniciarApp();



require 'includes/footer.php';
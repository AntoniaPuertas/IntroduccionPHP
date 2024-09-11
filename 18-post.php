<?php 
include 'includes/header.php';?>

<h2>Formulario con POST</h2>

<form action="recibir-post.php" method="POST">
  <div class="campoForm">
    <label for="nombre">Nombre:</label>
    <!-- El atributo name es muy importante pues la variable $_GET va a contener una clave con el valor de name -->
    <input type="text" name="nombre">
  </div>

  <div class="campoForm">
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos">
  </div>
  <div class="campoForm">
    <input type="submit" value="Enviar datos">
  </div>

</form>

<?php include 'includes/footer.php';?>


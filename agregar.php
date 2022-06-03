<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Pokedex</title>
</head>
<body>
<?php include('header.php')?>
<main>

<form action="agregar-conexion.php" method="post" enctype="multipart/form-data">
  <h2>Agregar un pokemon</h2>
  <p>      
  <label><b>Número</b></label>
  <input type="text" name="nro"></p>
  <p>      
  <label><b>Nombre</b></label>
  <input type="text" name="nombre"></p>
  <p>      
  <label><b>Descripción</b></label>
  <input type="text" name="descripcion"></p>
  <p>      
  <label><b>Tipo</b></label>
  <input type="text" name="tipo"></p>
  <p>
    <input type="file" name="imagen">
    <br>
<!--     <input type="submit" name="enviar" value="Subir imagen">-->
  </p>
  <p>      
  <input type="submit" value="Agregar">
  </p>
</form>

</main>
<footer>

</footer>
</body>
</html>
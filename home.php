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
<header>
    <div class="flex-container">
        <div>
            <img src="./img/Pokemon-logo.svg" alt="Logo Pokemon" width="200em">
        </div>
        <div>    
            <img id="logo-pokedex" src="./img/pokedex-logo.png" alt="Logo Pokedex" width="200em">
        </div>
        <div>
            <h3 id="logueado">USUARIO/A<br>LOGUEADO/A</h3>
        </div>
    </div>    
</header>
<main>

<h2>¡Atrapalos ya!</h2>

<?php
//include('config.php');
?>

<form action="busqueda.php" method="post">
    <input type="text" name="busqueda"><br>
    <input type="submit" name="enviar" value="Buscar">
</form>

<div style="width:50%">
  <button style="width:50%, padding-bottom:1em" class="w3-button w3-block w3-black"><a href="agregar.php">Agregar pokemon</a></button>
  <div style="margin:1em"></div>
</div>

<table style="width:100%">
  <tr>
    <th>Imagen</th>
    <th>Tipo</th>
    <th>Número</th>
    <th>Nombre</th>
    <th>Acciones</th>
  </tr>

<?php
include('tabla-pokemones-logueado.php');
?>


</table>

</main>
<footer>

</footer>
</body>
</html>
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
            <form id="login" action="./validar-usuario.php" method="post">
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user"><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass"><br>
                <input type="submit" value="Ingresar">
            </form> 
        </div>
    </div>    
</header>
<main>

<h2>¡Atrapalos ya!</h2>

<table style="width:69%">
  <tr>
    <th>Imagen</th>
    <th>Tipo</th>
    <th>Número</th>
    <th>Nombre</th>
  </tr>

<?php
include('tabla-pokemones.php');
?>


</table>

</main>
<footer>

</footer>
</body>
</html>
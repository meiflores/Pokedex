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
    <!--ACA INCLUYO FONTAWESOME-->
    <script src="https://kit.fontawesome.com/33cfd1bfe2.js" crossorigin="anonymous"></script>
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
            <h3 id="logueado">¡Hola, <?php session_start(); echo $_SESSION['user'];?>!</h3>
        </div>
    </div>    
</header>
<main>


<?php
//include('config.php');
?>

<div class="contenedorBusqueda">
        <form action="" method="post" class="contenedorBusqueda">
            <input type="text" name="busqueda" id="inputBusqueda" placeholder="Buscar..."><br>
            <button type="submit" name="enviar" id="botonBusqueda"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        </div>

<table style="width:100%" id="tablaPokemones">
<tr id="tituloTabla">
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
<!--FAB AGREGAR POKEMON-->
<a href="agregar.php">
            <div id="agregarPokemon">    
            <i class="fa-solid fa-plus"></i>
            </div>
            </a>

</main>
<footer>

</footer>
</body>
</html>
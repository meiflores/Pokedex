<!--PANTALLA DE MODIFICACION DE POKEMON-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Pokedex - Modifica tu Pokemonito</title>
</head>
<body>
    <!--INCLUYO EL HEADER-->
    <?php include('header.php'); 
    //OBTENGO EL ID DEL POKEMON DESDE LA URL
    $idPokemon = $_GET['id'];
    include('db-pokemones.php');
    //BUSCO LA INFORMACION DEL POKEMON POR SU ID
    $consultaPokemon="SELECT * FROM tabla_pokemones WHERE id = ".$idPokemon;
    $resultadoPokemon = mysqli_query($conexion_pokemones, $consultaPokemon);
    //GUARDO LOS DATOS DEL POKEMON
    $datosPokemon = mysqli_fetch_array($resultadoPokemon);
    ?>

    <main>

<form action="actualizar-pokemon.php" method="post" enctype="multipart/form-data">
  <h2>Modificar Pokemonito</h2>
  <input type="hidden" name="id" value="<?php echo $idPokemon ?>">
  <p>      
  <label><b>Número</b></label>
  <input type="text" name="nro" value="<?php echo $datosPokemon['nro']?>"></p>
  <p>      
  <label><b>Nombre</b></label>
  <input type="text" name="nombre" value="<?php echo $datosPokemon['nombre']?>"></p>
  <p>      
  <label><b>Descripción</b></label>
  <input type="text" name="descripcion" value="<?php echo $datosPokemon['descripcion']?>"></p>
  <p>      
  <label><b>Tipo</b></label>
  <select name="tipo" value="water.png">
  <option value="img/fire.png">Fire</option>
  <option value="img/grass.png">Grass</option>
  <option value="img/water.png">Water</option>
</select>

</p>
  <p>
    <input type="file" name="imagen">
    <br>
<!--     <input type="submit" name="enviar" value="Subir imagen">-->
  </p>
  <p>      
  <input type="submit" value="Actualizar">
  </p>
</form>

</main>
<footer>

</footer>
</body>
</html>
<?php
//OBTENGO EL ID DEL POKEMON DESDE LA URL
$idPokemon = $_GET['id'];
include('db-pokemones.php');
//BUSCO LA INFORMACION DEL POKEMON POR SU ID
$consultaPokemon="SELECT * FROM tabla_pokemones WHERE id = ".$idPokemon;
$resultadoPokemon = mysqli_query($conexion_pokemones, $consultaPokemon);
//GUARDO LOS DATOS DEL POKEMON
$datosPokemon = mysqli_fetch_array($resultadoPokemon);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('header.php')?>
    <h2><?php echo $datosPokemon['nombre'] ?>   </h2>
    <img src="<?php echo $datosPokemon['img'] ?>"/>
    <ul>
        <li> Tipo:<?php echo $datosPokemon['tipo'] ?>
        <li> Numero de Pokemonito:<?php echo $datosPokemon['nro'] ?>
        <li> Descripción:<?php echo $datosPokemon['descripcion'] ?>
    </ul>
</body>
</html>
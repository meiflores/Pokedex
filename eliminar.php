<?php
$idQueVoyAEliminar = $_GET['id'];

include('db-pokemones.php');

$consultaPokemon="DELETE FROM tabla_pokemones WHERE id = ".$idQueVoyAEliminar;
$resultadoPokemon = mysqli_query($conexion_pokemones, $consultaPokemon);

if($resultadoPokemon){
    header("location: home.php");
} else{
    echo "Ups! Hubo un error al eliminar tu Pokemonito";
}

?>
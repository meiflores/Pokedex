<!--ACTUALIZA UN POKEMON EN LA BASE DE DATOS-->

<?php

$conexion= mysqli_connect("localhost", "root", "", "pokemones") or die("Problemas al intentar conectar");

$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];

//ACA VOY A LEER TODO LO QUE ME PASARON POR FORMULARIO

$numero = $_POST['nro'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$idPokemon = $_POST['id'];

$ruta="img";

$ruta=$ruta . "/" . $nombreimg;

move_uploaded_file($archivo,$ruta);

$query = mysqli_query($conexion, "UPDATE tabla_pokemones SET nro=".$numero.", img='".$ruta."', nombre='".$nombre."', tipo='".$tipo."', descripcion='".$descripcion."' WHERE id =".$idPokemon) or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);

/* $rutaArchivoTemporal = $_FILES['imagenPokemon']['tmp_name'];
$rutaArchivoFinal = "MiPokedex/img/" . $_POST['nombreImagen'];

move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal); */

/* move_uploaded_file($_FILES['imagenPokemon']['tmp_name'], $_FILES['img']['name']);

echo "<img src='$rutaArchivoFinal'/>";*/
if($query){
    header("location:actualizado.php");
} else{
    echo "Ups! Hubo un error al actualizar tu Pokemonito";
}
?>

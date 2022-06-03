<?php

$conexion= mysqli_connect("localhost", "root", "", "pokemones") or die("Problemas al intentar conectar");

$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="img";

$ruta=$ruta . "/" . $nombreimg;

move_uploaded_file($archivo,$ruta);

$query = mysqli_query($conexion, "INSERT INTO tabla_pokemones(nro, nombre, descripcion, img)
                        VALUES ('$_REQUEST[nro]', '$_REQUEST[nombre]', '$_REQUEST[descripcion]', '".$ruta."')")
                        or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);

/* $rutaArchivoTemporal = $_FILES['imagenPokemon']['tmp_name'];
$rutaArchivoFinal = "MiPokedex/img/" . $_POST['nombreImagen'];

move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal); */

/* move_uploaded_file($_FILES['imagenPokemon']['tmp_name'], $_FILES['img']['name']);

echo "<img src='$rutaArchivoFinal'/>";*/
if($query){
    header("location:agregado.php");
} else{
    echo "Error al agregar pokemon.";
}
?>

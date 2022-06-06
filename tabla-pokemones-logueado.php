<?php

include('db-pokemones.php');

$consulta="SELECT * from tabla_pokemones";
$resultado=mysqli_query($conexion_pokemones,$consulta);

while($mostrar=mysqli_fetch_array($resultado)){
?>

<tr>
    <td id="contenedor-img-tabla"><a href="descripcion-pokemon.php?id=<?php echo $mostrar['id']?>"><img id="img-tabla" src="<?php echo $mostrar['img'] ?>" alt=""></a></td>
    <td id="contenedor-img-tabla"><img id="img-tabla" src="<?php echo $mostrar['tipo'] ?>" alt=""></td>
    <td><?php echo $mostrar['nro'] ?></td>
    <td><?php echo $mostrar['nombre'] ?></td>
    <td>

    <a href="modificarPokemon.php?id=<?php echo $mostrar['id'] ?>"><i class="fa-solid fa-pen-to-square icono"></i></a>
                        <a href="eliminar.php?id=<?php echo $mostrar['id'] ?>"><i class="fa-solid fa-trash icono"></i></a>
    </td>
</tr>

<?php
}
?>
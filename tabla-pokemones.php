<?php

include('db-pokemones.php');

$consulta="SELECT * from tabla_pokemones";
$resultado=mysqli_query($conexion_pokemones,$consulta);

while($mostrar=mysqli_fetch_array($resultado)){
?>

<tr>
    <td id="contenedor-img-tabla"><img id="img-tabla" src="<?php echo $mostrar['img'] ?>" alt=""></td>
    <td id="contenedor-img-tabla"><img id="img-tabla" src="<?php echo $mostrar['tipo'] ?>" alt=""></td>
    <td><?php echo $mostrar['nro'] ?></td>
    <td><?php echo $mostrar['nombre'] ?></td>
</tr>

<?php
}
?>
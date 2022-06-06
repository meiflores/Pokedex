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
    <?php include('header.php') ?>
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

        <!-- <div style="width:50%">
            <button style="width:50%; padding-bottom:1em" class="w3-button w3-block w3-black"><a href="agregar.php">Agregar pokemon</a></button>
            <div style="margin:1em"></div>
        </div> -->

        <table style="width:100%" id="tablaPokemones">
            <tr id="tituloTabla">
                <th>Imagen</th>
                <th>Tipo</th>
                <th>Número</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>

            <?php

            //$con= mysqli_connect("localhost", "root", "", "pokemones") or die("Problemas al intentar conectar");

            include('db-pokemones.php');

            //VERIFICO QUE HAYA UN VALOR PASADO POR POST, ELSE $BUSQUEDA = ''
            if (isset($_POST['busqueda'])) {
                $busqueda = $_POST['busqueda'];
            } else {
                $busqueda = '';
            }

            $consultaPokemon = "SELECT * FROM tabla_pokemones WHERE nombre LIKE '%" . $busqueda . "%'";

            $resultadoPokemon = mysqli_query($conexion_pokemones, $consultaPokemon);

            //EN ESTA VARIABLE GUARDO LA CANTIDAD DE RESULTADOS DE LA BUSQUEDA
            $cantidad_resultados = mysqli_num_rows($resultadoPokemon);

            //PREGUNTO SI LA BUSQUEDA NO ARROJO RESULTADOS
            if ($cantidad_resultados == 0) {
                //SI NO HAY RESULTADOS HAGO UNA NUEVA CONSULTA QUE TRAIGA TODOS LOS POKEMONES Y MUESTRO UN MENSAJE
                echo "<p class='noHayPokemon'>Pokemon no encontrado</p>";
                $consultaPokemon = "SELECT * FROM tabla_pokemones";
                $resultadoPokemon = mysqli_query($conexion_pokemones, $consultaPokemon);
            }

            while ($row = mysqli_fetch_array($resultadoPokemon)) {
            ?>
                <tr>
                    <td id="contenedor-img-tabla"><a href="descripcion-pokemon.php?id=<?php echo $row['id'] ?>"><img id="img-tabla" src="<?php echo $row['img'] ?>" alt=""></a></td>
                    <td id="contenedor-img-tabla"><img id="img-tabla" src="<?php echo $row['tipo'] ?>" alt=""></td>
                    <td><?php echo $row['nro'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td>

                        <a href="modificarPokemon.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square icono"></i></a>
                        <a href="eliminar.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash icono"></i></a>
                    </td>
                </tr>
            <?php
            }

            //mysqli_close($con);




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
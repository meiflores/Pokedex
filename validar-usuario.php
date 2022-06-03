<?php

$usuario=$_POST['user'];
$password=$_POST['pass'];

session_start();
$_SESSION['user']=$usuario;

include('db.php');

$consulta="SELECT * FROM administradores where User='$usuario' and Password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <h2 id="usuario-invalido">Usuario o contraseña no registrados</h2>
    <?php
    include("index.php");
    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
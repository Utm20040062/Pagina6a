<?php

ini_set('display errors', 1);
error_reporting(E_ALL);

include('db.php');

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="INSERT INTO usuarios ( usuario , password ) VALUES ('$usuario','$password')";
$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";
header("location:index.html");


mysqli_close($conexion);
?>
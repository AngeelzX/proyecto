<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');

$nombre = $_POST["nombre"]; 
$email  = $_POST["email"];
$estado  = $_POST["estado"];
$ciudad  = $_POST["ciudad"];
$telefono  = $_POST["telefono"];
$edad  = $_POST["edad"];

$insertar = "INSERT INTO solicitudes(full_name,email,estado,ciudad,telefono,edad) VALUES ('$nombre','$email','$estado','$ciudad','$telefono', $edad);";

$resultado = mysqli_query($conexion, $insertar);


header("Location: index.php");
?>
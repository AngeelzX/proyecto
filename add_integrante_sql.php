<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');

$nombre = $_POST["nombre"]; 
$email  = $_POST["email"];
$telefono  = $_POST["telefono"];
$edad  = $_POST["edad"];
$estado  = $_POST["estado"];
$ciudad  = $_POST["ciudad"];



$insertar = "INSERT INTO integrantes (nombre,email,telefono,edad,estado,ciudad) VALUES ('$nombre','$email','$telefono',$edad,'$estado', '$ciudad');";

$resultado = mysqli_query($conexion, $insertar);


?>
<script>
alert("correcto");
window.location.href='verequipo.php';
</script>
<?php

?>

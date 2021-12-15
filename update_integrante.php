<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');

$nombre = $_POST["nombre"]; 
$email  = $_POST["email"];
$telefono  = $_POST["telefono"];
$edad  = $_POST["edad"];
$estado  = $_POST["estado"];
$ciudad  = $_POST["ciudad"];

if (isset($_POST['id']))
    $id = $_POST['id'];

$sql = "UPDATE integrantes SET nombre ='$nombre',email ='$email',telefono ='$telefono',edad = $edad, estado ='$estado',ciudad ='$ciudad' WHERE id_integrante=$id";


if (mysqli_query($conexion,$sql)) {
    ?>
        <script>
        alert("correcto");
        window.location.href='verequipo.php';
    </script>
    <?php
  } else {
    ?>
        <script>
        alert("error");
        window.location.href='verequipo.php';
    </script>
    <?php
  }

?>
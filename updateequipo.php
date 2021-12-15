<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');

if (isset($_GET['id']))
    $id = $_GET['id'];

$sql = "SELECT * FROM integrantes WHERE id_integrante=".intval($id);




$result = mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

$last_id = $mostrar['id_integrante'];
$nombre = $mostrar["nombre"]; 
$email  = $mostrar["email"];
$telefono = $mostrar["telefono"];
$edad  = $mostrar["edad"];
$estado  = $mostrar["estado"];
$ciudad  = $mostrar   ["ciudad"];
}

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title> updateequipo</title>
  </head>
  <body>
  <header class="sticky-top" id="header_"></header>
    <div class="container">
      <div class="btn_regresar mt-5"><a href="verequipo.php"><button class="btn btn-info">Regresar</button></a></div>
        
      <form method="post" action="update_integrante.php" class="text-white">
    
      <input value="<?= $last_id?>" type="hidden" name="id"style=" background: transparent; border: none;"> <br>
        <label style="color: black;">Nombre Completo: </label>
        <input value="<?= $nombre?>" type="text" name="nombre"> <br>
        <label style="color: black;">Correo:</label>
        <input value="<?= $email?>" type="email" name="email" style="margin-top: 15px;"> <br>
        <label style="color: black;"> estado:</label>
        <input value="<?= $estado?>" type="text" name="estado" style="margin-top: 15px;"> <br>
        <label style="color: black;">ciudad:</label>
        <input value="<?= $ciudad?>" type="text" name="ciudad" style="margin-top: 15px;"> <br>
        <label style="color: black;">telefono:</label>
        <input value="<?= $telefono?>"  type="text" name="telefono" style="margin-top: 15px;"> <br>
        <label style="color: black;">edad:</label>
        <input value="<?= $edad?>" type="text" name="edad" style="margin-top: 15px;"> <br>
   
  
        <!-- <input type="submit" name="aceptar" value="Sign In" style="margin-top: 15px;"> -->
       <button class="btn btn-success">Editar</button>
      </form>
    </div>
    <!-- Scripts -->
    <script src="jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="script_update.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

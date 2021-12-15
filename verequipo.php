<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');
session_start();
$sesion = FALSE;

if(isset($_SESSION['tipo'])){


$sesion = TRUE;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ciclismo</title>
</head>

<body>
    <script src="index.js"></script>

    <div class="p-3 mb-1 bg-primary text-black">
      <p class="fs-1  fw-bold "style = "font-family:calibri;" >Ciclismo Competitivo Tarasco Morelia</p>
      <IMG SRC="imagenes/patrocinador1.jpg" style="height: 2em; width: 7em; margin-top: -4em;" Align="right">
        <IMG SRC="imagenes/patrocinador2.png" style="height: 3em; width: 5em; margin-top: -4.3em; margin-right: 21em;" Align="right">
          <IMG SRC="imagenes/patrocinador3.png" style="height: 5em; width: 7em; margin-top:-5em; margin-right: 10em;" Align="right">

        
  </div>
    
    <div>
      
      <button onclick="location.href='index.php'" type="button" class="btn btn-primary" style="left: 0%; padding:.3em; margin-bottom: .4em;margin: top -3.7em;; margin-left: .9em;">Inicio</button>
  </div>
  <hr Style="margin-top: 0em;">
  <center>
  <h1>Integrantes del Equipo</h1>
</center>
<center> 
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

  <tr>
        <th>N.Control&nbsp;</th>
        <th>NOMBRE&nbsp;</th>
        <th>CORREO&nbsp;</th>
        <th>TELEFONO&nbsp;</th>
        <th>EDAD&nbsp;</th>
        <th>ESTADO&nbsp;</th>
        <th>CIUDAD&nbsp;</th> 
        <?php
        if($sesion)
        
        if(($_SESSION['tipo']) == 'administrador' || ($_SESSION['tipo']) == 'entrenador')
{ ?>   <th scope="col">Accion(Eliminar)</th>
  <th scope="col">Accion(Editar)</th>
  <?php
}
  ?>   
  </tr> 
  

  <?php
  $sql = "SELECT * FROM integrantes";
  $result = mysqli_query($conexion,$sql);

  while($mostrar=mysqli_fetch_array($result)){
    $last_id = $mostrar['id_integrante'];
  
  ?>
      <td><?= $last_id?></td>
      <td><?php echo $mostrar['nombre']?>&nbsp;</td>
      <td><?php echo $mostrar['email']?>&nbsp;</td>
      <td><?php echo $mostrar['telefono']?>&nbsp;</td>
      <td><?php echo $mostrar['edad']?>&nbsp;</td>
      <td><?php echo $mostrar['estado']?>&nbsp;</td>
      <td><?php echo $mostrar['ciudad']?>&nbsp;</td>
      <?php 
      
      if($sesion)
if(($_SESSION['tipo']) == 'administrador'|| ($_SESSION['tipo']) == 'entrenador')
{ ?>
  <td><a href="eliminar_integrante.php?id=<?= $last_id?>"><button class="btn btn-danger">Eliminar</button></a></td>
  <td><a href="updateequipo.php?id=<?= $last_id?>"><button class="btn btn-success">Editar</button></a></td>
  <?php
}
  ?>
</tr> 

<?php
}
?>
</table>  
<?php
  if($sesion)
if(($_SESSION['tipo']) == 'administrador'|| ($_SESSION['tipo']) == 'entrenador')
{ ?>
 <td><a href="addintegrante.php?id=<?= $last_id?>"><button class="btn btn-success">Añadir integrante</button></a></td>
  <?php
}
  ?>

</center>

   
</body>
</html>
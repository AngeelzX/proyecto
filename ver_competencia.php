<?php
$conexion = mysqli_connect('localhost','root','','ciclismo')

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
    <h1>Listado de competencias</h1>
</center>
<center> 
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;">

  <tr>
        <td>Nombre de la competencia&nbsp;</td>
        <td>fecha de la competencia&nbsp;</td>
        <td>Hora&nbsp;</td>
        <td>Lugar donde sera la competencia &nbsp;</td>
        <td>Descripcion&nbsp;</td>
        
  </tr> 
  

  <?php
  $sql = "SELECT * FROM competencia";
  $result = mysqli_query($conexion,$sql);

  while($mostrar=mysqli_fetch_array($result)){

  
  ?>
  <tr>
      <td><?php echo $mostrar['nombre_compe']?>&nbsp;</td>
      <td><?php echo $mostrar['fecha_compe']?>&nbsp;</td>
      <td><?php echo $mostrar['hora']?>&nbsp;</td>
      <td><?php echo $mostrar['lugar_compe']?>&nbsp;</td>
      <td><?php echo $mostrar['descripcion_compe']?>&nbsp;</td>
      
</tr> 
<?php
}
?>
</table>  
</center>
    
</body>

</html>
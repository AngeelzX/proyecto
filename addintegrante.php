<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclismo</title>
    <link rel="stylesheet" href="/unete.php"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="p-3 mb-1 bg-primary text-black">
    <p class="fs-1  fw-bold "style = "font-family:calibri;" >Ciclismo Competitivo Tarasco Morelia</p>
    <IMG SRC="imagenes/patrocinador1.jpg" style="height: 2em; width: 7em; margin-top: -4em;" Align="right">
      <IMG SRC="imagenes/patrocinador2.png" style="height: 3em; width: 5em; margin-top: -4.3em; margin-right: 21em;" Align="right">
        <IMG SRC="imagenes/patrocinador3.png" style="height: 5em; width: 7em; margin-top:-5em; margin-right: 10em;" Align="right">

      
</div>
    
        
      <button onclick="location.href='index.php'" type="button" class="btn btn-primary" style="left: 0%; padding:.3em; margin-bottom: .4em;margin: top -3.7em;; margin-left: .9em;">Inicio</button>
         
    </div>
    <center>
    <hr Style="margin-top: 0em;">
    <form method="post" action="add_integrante_sql.php" class="text-white">
        <label style="color: black;">Nombre Completo: </label>
        <input type="text" name="nombre"> <br>
        <label style="color: black;">Correo:</label>
        <input type="email" name="email" style="margin-top: 15px;"> <br>
        <label style="color: black;">telefono:</label>
        <input type="text" name="telefono" style="margin-top: 15px;"> <br>
        <label style="color: black;">edad:</label>
        <input type="text" name="edad" style="margin-top: 15px;"> <br>
        <label style="color: black;"> estado:</label>
        <input type="text" name="estado" style="margin-top: 15px;"> <br>
        <label style="color: black;">ciudad:</label>
        <input type="text" name="ciudad" style="margin-top: 15px;"> <br>
     
       
  
        <!-- <input type="submit" name="aceptar" value="Sign In" style="margin-top: 15px;"> -->
        <button type="submit" name="aceptar" class="btn btn-outline-success" style="margin-top: 15px; color: black;"> Añadir integrante</button>
      </form>

    </center>

    <hr>
       
    
</body>
</html>
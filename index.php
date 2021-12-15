<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclismo</title>
    <link rel="stylesheet" href="/index.html"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js"></script>
</head>

<body>
    <script src="index.js"></script>

    <div class="p-3 mb-1 bg-primary text-black">
        <p class="fs-1  fw-bold "style = "font-family:calibri;" >Ciclismo Competitivo Tarasco Morelia</p>
        <IMG SRC="imagenes/patrocinador1.jpg" style="height: 2em; width: 7em; margin-top: -4em;" Align="right">
          <IMG SRC="imagenes/patrocinador2.png" style="height: 5em; width: 9em; margin-top: -5.3em; margin-right: 21em;" Align="right">
            <IMG SRC="imagenes/patrocinador3.png" style="height: 5em; width: 9em; margin-top:-5em; margin-right: 10em;" Align="right">
            <?php
          if(array_key_exists("email",$_SESSION)){
            echo "<span>Bienvenido " . $_SESSION["email"] . "</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href= 'exit.php' class='btn-outline btn btn-danger' style='margin-right: 15px;' type='submit'>Cerrar Sesión</a>";
          } else{}

  ?>  
          
    </div>
   
    <hr>
    
    <div class="cover d-flex justify-content-center align-items-center">
      <?php
    if(!isset($_SESSION['tipo'])){
    ?>
  
    <a href="login.php" class="btn btn-secondary btn-lg bg-primary m-3"id="inicia">Inicia Sesion</a>
    <?php
}
  
?>
        <a href="verequipo.php" class="btn btn-secondary btn-lg bg-primary m-3"id="conocenos">Ver Equipo</a>
        <a href="unete.php" class="btn btn-secondary btn-lg bg-primary m-3" id="unete">Unete al Equipo</a>
        <a href="ver_competencia.php" class="btn btn-secondary btn-lg bg-primary m-3" id="ver_competencia">Ver Competencia</a>
    </div>

    
    <hr>
    <div class="container" style="padding: 8em; margin-top: -8em;">
      <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" style="border-style:solid; border-color:#0078bf;"data-bs-ride="carousel;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/-ciclismo.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/-ciclismo2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/-ciclismo3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<footer>


  <hr>
  <div class="container">
    <div class="row">
      <div class="col">
    <center style="margin-bottom: 5em;">
      <h1 style="text-align: center; font-size: 45px;" class="mt-5">Contáctanos</h1>
      <a class="linksFooter" href="#"style="color: black ;">Facebook:  </a><br>
      <a class="linksFooter" href="#"style="color: black ;">Correo:   </a><br>
      <a class="linksFooter" href="#"style="color: black ;">Telefono:   </a><br>
    </center>
      </div>
    <div class="col"> 
      <center style="margin-bottom: 5em;">
        <h1 style="text-align: center; font-size: 45px;" class="mt-5">Patrocinadores</h1>
        <a class="linksFooter" href="#"style="color: black ;">Patrocinador 1  </a><br>
        <a class="linksFooter" href="#"style="color: black ;">Patrocinador 2  </a><br>
        <a class="linksFooter" href="#"style="color: black ;">Patrocinador 3   </a><br>
        <p>¿Quieres formar parte del equipo de patrocinadores?</p>
        <p>Mandanos un correo!</p>
        <a class="linksContacto" href="#">quieroserpatrocinador@hotmail.com</a>
      </center>
    </div>

    </div>
  </div>

</footer>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>   

    
</body>
</html>
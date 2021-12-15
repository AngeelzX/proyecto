<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname ="ciclismo";

    $link = mysqli_connect($servername,$username,$password,$bdname);
    
    if(!$link){
        die('No se pudo conectar a la base de datos.');
     }
?>
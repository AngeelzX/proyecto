<?php
$conexion = mysqli_connect('localhost','root','','ciclismo');

if (isset($_GET['id']))
    $id = $_GET['id'];

$sql = "DELETE FROM integrantes WHERE id_integrante=".intval($id);
    if (mysqli_query($conexion, $sql)) {
        ?>
        <script>
        alert("correcto");
        window.location.href='verequipo.php';
    </script>
    <?php
    }else{
        ?>
        <script>
        alert("error");
        window.location.href='verequipo.php';
    </script>
    <?php
    }
?>
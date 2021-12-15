<?php
require 'mysqlConnection.php';
session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

$sql="SELECT COUNT(*) as contar FROM administrador WHERE email='$email' AND pass ='$pass'";
$resultado = mysqli_query($link,$sql);
$arr = mysqli_fetch_array($resultado);

if ($arr['contar']>0){
    session_start();  
    $_SESSION['tipo']='administrador';
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
     header("Location: index.php");
     die();
}else{
    $sql="SELECT COUNT(*) as contar FROM entrenador WHERE correo='$email' AND pass ='$pass'";
    $resultado = mysqli_query($link,$sql);
    $arr = mysqli_fetch_array($resultado);
    
    if ($arr['contar']>0){
        session_start();  
    $_SESSION['tipo']='entrenador';
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
         header("Location: index.php");
         die();
    }else{
        $sql="SELECT COUNT(*) as contar FROM integrantes WHERE email='$email' AND pass ='$pass'";
        $resultado = mysqli_query($link,$sql);
        $arr = mysqli_fetch_array($resultado);
        
        if ($arr['contar']>0){
            session_start();  
        $_SESSION['tipo']='integrante';
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
             header("Location: index.php");
             die();
        }else{
            ?>
            <script>
            alert("Los datos son incorrectos.");
            window.location.href='login.php';
        </script>
        <?php
        }
     
        }
    ?>
<script>
	alert("Los datos son incorrectos.");
    window.location.href='login.php';
</script>
<?php
}
?>

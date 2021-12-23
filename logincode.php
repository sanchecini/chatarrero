<?php
include('security.php');


if(isset($_POST['login_btn']))
{
    $usuario_login = $_POST['usuario']; 
    $password_login = $_POST['contrasena']; 

    $query = "SELECT * FROM usuarios WHERE usuario='$usuario_login' AND contrasena='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

    $promociones_query = "SELECT * FROM usuarios";
    $promociones_query_run = mysqli_query($connection, $promociones_query);
    foreach($promociones_query_run as $promo_row){
    
       $nombre_usuario = $promo_row['nombre'];
     }


    if(mysqli_fetch_array($query_run))
    {
         $_SESSION['username'] = $nombre_usuario;
         $_SESSION['status'] = "Bienvenido";
         $_SESSION['status_code'] = "success";
         header('Location: index.php');
    } 
    else
    {
         $_SESSION['status'] = "Usuario y/o contraseña incorrecta";
         $_SESSION['status_code'] = "error";
         header('Location: login.php');
    }
     
 }

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}




?>
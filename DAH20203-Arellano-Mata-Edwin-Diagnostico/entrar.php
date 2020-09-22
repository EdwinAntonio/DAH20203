<?php
    session_start();
    
    $usuario =$_POST['user'];
    $contraseña =$_POST['pass'];
    include('utilerias.php');
    
    if($usuario=='admin' && $contraseña=='admin'){
        $_SESSION['user']='ADMIN';
        redireccionar('../Principal.php');
    }else{
        redireccionar('../Login.php');
    }
?>
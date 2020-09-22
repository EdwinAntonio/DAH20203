<?php
    session_start();

    include('utilerias.php');

    if(isset($_SESSION['user'])){
        redireccionar('../login.php');
        $_SESSION=array();
        session_destroy();
        
    }else{
        redireccionar("http://localhost:8080/PaginaDAH/Login.php");
        
    }
?>
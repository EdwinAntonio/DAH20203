<?php
    function redireccionar($direccion){
     header("refresh:2;url=$direccion");//con dobles comillas reconoce una variable
    } 

    function prohibido(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user'])){
            redireccionar('../Login.php');
            return true;
        }
        return false;
    }


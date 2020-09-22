<!DOCTYPE html>
<html lang="en">

<?php
 include('utilerias.php');
if(prohibido()){return;}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <div>
        <h1>Bienvenido</h1>
        <p>Ingrese un numero</p>
        <input type="text" name="Numero" size="25"/>
        <input type="submit" value="validar"/>
    </div>
</body>
</html>
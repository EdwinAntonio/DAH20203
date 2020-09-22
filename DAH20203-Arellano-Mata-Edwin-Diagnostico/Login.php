<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<script type="text/javascript">
    function Mostrar() {
        document.getElementById("nueva-img").style.display = "block";
    }

    function Ocultar() {
        document.getElementById("nueva-img").style.display = "none";
    }

    function Mostrar_Ocultar() {
        var nuevotema = document.getElementById("nueva-img");
        if (nuevotema.style.display == "none") {
            Mostrar();
        } else {
            Ocultar();
        }
    }
</script>

<body>
<div class="login">
        <article class="fondo">
          <h3>Inicio de Sesión</h3>
          <form action="../entrar.php" class="formulario" enctype="multipart/form-data" method="POST">
              <input class="inp" type="text" name="user" value="" placeholder="Usuario"><br>
              <input class="inp" type="password" name="pass" value="" placeholder="Contraseña"><br>
              <div class="boton">
                <input type="submit" value= "Iniciar Sesion">
              </div>
          </form>
        </article>
      </div>
</body>
</html>
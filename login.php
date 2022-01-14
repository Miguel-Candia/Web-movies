<?php
// Iniciar sesión
session_start();
include("db.php");

    if(isset($_POST["ingresar"])){

        $consulta="SELECT `correo`, `password` FROM `usuarios` WHERE `correo`='$correo' AND `password`='$password'";
        $resultado = mysqli_query($conn, $consulta);

        // validamos si existe el Usuario y la contraseña
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(mysqli_num_rows($resultado) > 0){
            $_SESSION["usuario"]=$_POST['usuario'];
            $_SESSION["password"]=$_POST['contraseña'];
            header('Location: index.php');
            exit();
        }else{
            //  include("longin.php");
           echo '<script language="javascript">alert("Usuario no existe");</script>';

        }
}}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Cinemanía</title>
  </head>
  <body>
    <form id="formulario" method="POST" action="">
      <div>
        <h1 class="text">Bienvenido</h1>
      </div>
      <div>
        <label for="usuario" class="form-label">Usuario</label>
        <input
          type="text"
          class="form-control"
          id="usuario"
          name="usuario"
          aria-describedby="emailHelp"
          placeholder="Usuario"
        />
      </div>
      <div>
        <label for="contraseña" class="form-label">Contraseña</label>
        <input
          type="password"
          class="form-control"
          id="contraseña"
          name="contraseña"
          placeholder="Contraseña"
        />
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
      </div>
      <button type="submit" class="btn btn-primary" id="button" name="ingresar" >
        Ingresar
      </button>
      <div>
        <a href="forgot.php">¿Olvidaste tu contraseña?</a>
      </div>
      <div>
        <a href="register.php">Regístrate</a>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="validations.js"></script>
    <script src="register.js"></script>

  </body>
</html>

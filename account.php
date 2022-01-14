<?php
//Iniciar la sesión
session_start();

// Validar si existe la variable de sessión user
if(!isset($_SESSION['usuario']) && !isset($_SESSION['password'])) {
  header("Location: login.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Style.css" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Cinemanía</title>
  </head>
  <body>
       <!--Navigation bar-->
<div id="nav-placeholder" style="height: 50px;">
</div>

    <form id="formulario" method="POST" action="validarAccount.php">
      <div>
        <h1 class="text">Mi Cuenta</h1>
      </div>
      <div class="row">
        <div class="col">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre" />
        </div>
        <div class="col">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellido" />
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail4">Correo electrónico</label>
        <input
          type="email"
          class="form-control"
          id="usuario"
          name="usuario"
          placeholder="Correo electrónico"
        />
        <div class="row">
          <div class="col">
            <label for="contraseña">Contraseña</label>
            <input
              type="password"
              class="form-control"
              id="contraseña"
              name="contraseña"
              placeholder="Contraseña"
            />
          </div>
          <div class="col">
            <label for="confContraseña">Confirmar Contraseña</label>
            <input
              type="password"
              class="form-control"
              id="confContraseña"
              name="confContraseña"
              placeholder=" Confirmar Contraseña"
            />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
          <button type="button" class="btn btn-danger" name="cancelar">Cancelar</button>
        </div>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="validations.js"></script>
   <script src="register.js"></script>
   <script>

    $(function(){
      $("#nav-placeholder").load("navbar.html");
      });
</script>
  </body>
</html>

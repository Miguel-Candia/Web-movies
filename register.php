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
    <form id="formulario" method="POST" action="validarRegister.php">
      <div>
        <h1 class="text">Crea tu cuenta</h1>
      </div>
      <div class="row">
        <div class="col">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre" />
          <span id="usuarioHelpLine" class="form-text"></span>
        </div>
        <div class="col">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellido" />
          <span id="usuarioHelpLine" class="form-text"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input
          type="email"
          class="form-control"
          name="usuario"
          id="usuario"
          placeholder="Correo electrónico"
        />
        <span id="usuarioHelpLine" class="form-text"></span>
        <div class="row">
          <div class="col">
            <label for="contraseña">Contraseña</label>
            <input
              type="password"
              class="form-control"
              name="contraseña"
              id="contraseña"
              placeholder="Contraseña"
            />
            <span id="usuarioHelpLine" class="form-text"></span>
          </div>
          <div class="col">
            <label for="confContraseña">Confirmar Contraseña</label>
            <input
              type="password"
              class="form-control"
              name="confContraseña"
              id="confContraseña"
              placeholder=" Confirmar Contraseña"
            />
            <span id="usuarioHelpLine" class="form-text"></span>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="registrar">
        Registrar Cuenta
      </button>
      <div>
        <a href="forgot.php">¿Olvidaste tu contraseña?</a>
      </div>
      <div>
        <a href="login.php">¿Ya tienes una cuenta creada? Inicia sesión</a>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="validations.js"></script>
   <script src="register.js"></script>
  </body>
</html>

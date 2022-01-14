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
    <form id="formulario" method="POST" action="validarForgot.php">
      <div>
        <h1 class="text">¿Olvidaste tu contraseña?</h1>
      </div>
      <div>
        <p>
          No te preocupes ingresa tu correo electrónico para recuperar tu
          contraseña enseguida.
        </p>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Correo electrónico</label>
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1"
          name="usuario"
          placeholder="nombre@ejemplo.cl"
        />
      </div>
      <button type="submit" class="btn btn-primary btn-lg" name="restaurar">
        Restaurar Contraseña
      </button>
      <div>
        <a href="register.php">Regístrate</a>
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

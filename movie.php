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

    <div class="row">
      <img id="img1" src="images/Cvaliente.jpg" alt="Imagen" />
      <table>
        <thead>
          <tr>
            <th colspan="2">
              <h1 class="text">Corazón&nbsp;Valiente</h1>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <th class="tex">Director</th>
            <td class="tex">Pedro&nbsp;de&nbsp;Larrechea</td>
          </tr>
          <tr>
            <th class="tex">Protagonistas</th>
            <td class="tex">Mel Gibson</td>
          </tr>
          <tr>
            <th class="tex">Sinopsis</th>
            <td class="tex">Lorem ipsum dolor sit amet olor sit ame.</td>
          </tr>
          <tr>
            <th class="tex">Año</th>
            <td class="tex">1995</td>
          </tr>
        </tbody>
      </table>
      <form>
        <p class="clasificacion">
          <input id="radio1" type="radio" name="estrellas" value="5" /><!--
          --><label for="radio1">★</label
          ><!--
          --><input id="radio2" type="radio" name="estrellas" value="4" /><!--
          --><label for="radio2">★</label
          ><!--
          --><input id="radio3" type="radio" name="estrellas" value="3" /><!--
          --><label for="radio3">★</label
          ><!--
          --><input id="radio4" type="radio" name="estrellas" value="2" /><!--
          --><label for="radio4">★</label
          ><!--
          --><input id="radio5" type="radio" name="estrellas" value="1" /><!--
          --><label for="radio5">★</label>
        </p>
      </form>
    </div>

    <script>
    $(function(){
      $("#nav-placeholder").load("navbar.html");
    });
</script>
  </body>
</html>

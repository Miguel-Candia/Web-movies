<?php
//Iniciar la sesión
session_start();

// Validar si existe la variable de sessión user
if(!isset($_SESSION['usuario']) && !isset($_SESSION['password'])) {
  header("Location: login.php");
  exit();
}

include("db.php");

// Insertamos datos en la db
if(isset($_POST["buscar"])){
    $busqueda=$_POST['buscar'];
    $consulta = "SELECT * FROM `peliculas` WHERE `titulo` LIKE '%$busqueda%'";
    $resultado=mysqli_query($conn,$consulta);

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
    <form method="POST" action="">
      <div>
      <input type="text" placeholder="Buscar">
      <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
      </div>
      </form>
      <div class="container-mt-3" style="margin-top: 20px;">
      <div class="row">
      <?php
      while ($row = $resultado->fetch_array()){
        ?>
        <div class="card" style="width:20%; height: 20%;">
          <img class="card-img-top"<?php echo "src=" . $row['portada'] . "  "?>alt="Imagen"/>
          <div class="card-body">
            <h5 class="card-title"><?php echo "" . $row['titulo'] . ""?></h5>
            <p class="card-text">
            <?php echo "" . $row['sinopsis'] . ""?>
            </p>
          </div>
          <div class="card-footer">
            <form id="form">
              <p class="clasificacion">
                <input
                  id="radio1"
                  type="radio"
                  name="estrellas"
                  value="5"
                />
                <label for="radio1">★</label
                >
                <input
                  id="radio2"
                  type="radio"
                  name="estrellas"
                  value="4"
                />
                <label for="radio2">★</label
                >
                <input
                  id="radio3"
                  type="radio"
                  name="estrellas"
                  value="3"
                />
                <label for="radio3">★</label
                >
                <input
                  id="radio4"
                  type="radio"
                  name="estrellas"
                  value="2"
                />
                <label for="radio4">★</label
                >
                <input
                  id="radio5"
                  type="radio"
                  name="estrellas"
                  value="1"
                />
                <label for="radio5">★</label>
              </p>
            </form>
          </div>
        </div>

        <?php
      }
        ?>
        </div>
        </div>
      
        
    <script>
$(function(){
  $("#nav-placeholder").load("navbar.html");
});
</script>
  </body>
</html>

<?php

include("db.php");

// Insertamos datos en la db
if(isset($_POST["restaurar"])){

    if(buscarRepetido($correo,$conn) == 1) {
        include("login.php");
        echo '<script language="javascript">alert("Contraseña restaurada");</script>';
    }else{
        include("register.php");
        echo '<script language="javascript">alert("Correo no existente, por favor regístrate");</script>';
    } 
}

function buscarRepetido($correo,$conn){
    $consulta="SELECT `correo` FROM `usuarios` WHERE correo='$correo'";
    $resultado=mysqli_query($conn,$consulta);

  if(mysqli_num_rows($resultado) > 0){
        return 1;
    }else{
        return 0;
    }
}
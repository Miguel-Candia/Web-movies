<?php

include("db.php");

// Insertamos datos en la db
if(isset($_POST["registrar"])){



    if(buscarRepetido($correo,$conn) == 1) {
        include("register.php");
        echo '<script language="javascript">alert("Error el correo ingresado ya éxiste");</script>';
    }else{

    $consulta = "INSERT INTO `usuarios`(`nombres`, `apellidos`, `correo`, `password`) VALUES ('$nombres','$apellidos','$correo','$password')";
    $resultado = mysqli_query($conn, $consulta);
        if($resultado){
        include("login.php");
        echo '<script language="javascript">alert("Registrado con éxito");</script>';
        }
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
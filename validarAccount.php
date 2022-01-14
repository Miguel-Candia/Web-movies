<?php

include("db.php");

// Insertamos datos en la db
if(isset($_POST["guardar"])){



    if(buscarRepetido($correo,$conn) == 1) {

        $consulta = "UPDATE `usuarios` SET `correo`='$correo' `password`='$password'";
        $resultado = mysqli_query($conn, $consulta);

        echo '<script language="javascript">alert("Datos actualizados con éxito");</script>';
    }else{
        echo '<script language="javascript">alert("Error");</script>';
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
<?php

// se establece la conexion con el servidor de la base ded atos
$conn = mysqli_connect("localhost","root","","db_eva03");

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$correo = $_POST['usuario'];
$password = $_POST['contraseña'];
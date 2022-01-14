<?php
// 1. Iniciar la sesión
session_start();

// 2. Elimnar la variable de sesión
session_unset();
session_destroy();


header('Location: login.php');
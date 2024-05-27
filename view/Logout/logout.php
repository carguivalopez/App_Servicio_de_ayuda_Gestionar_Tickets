
<?php
require_once("../../config/conexion.php");

// Crear una instancia de la clase Conectar
$conectar = new Conectar();

// Acceder al método ruta() desde la instancia
$ruta = $conectar->ruta();

session_destroy();
header("Location:".$ruta."index.php"); 
exit();
?>

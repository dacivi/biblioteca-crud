<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Usuario por defecto en XAMPP
define('DB_PASS', '');     // Contraseña vacía por defecto en XAMPP
define('DB_NAME', 'biblioteca_digital');

$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
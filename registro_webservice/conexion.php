<?php
$hostname = 'localhost';
$database = 'alumnos_registro';
$username = 'root';
$password = '';

// Crear una conexión a la base de datos
$conexion = new mysqli($hostname, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}
?>

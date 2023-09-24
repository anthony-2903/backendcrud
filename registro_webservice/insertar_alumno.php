<?php
include 'conexion.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$escuela = $_POST['escuela'];

$consulta = "INSERT INTO registro VALUES  ('$codigo', '$nombre', '$apellido', '$escuela')";

if (mysqli_query($conexion, $consulta)) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

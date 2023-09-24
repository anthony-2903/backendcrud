<?php
include 'conexion.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$escuela = $_POST['escuela'];

$consulta = "UPDATE registro SET NOMBRES = '$nombre', APELLIDOS = '$apellido', ESCUELA = '$escuela' WHERE CODIGO = '$codigo'";

if (mysqli_query($conexion, $consulta)) {
    echo "Registro actualizado correctamente.";
} else {
    echo "Error al actualizar el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

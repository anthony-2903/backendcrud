<?php
include 'conexion.php';

$codigo = $_POST['codigo'];

$consulta = "DELETE FROM registro WHERE CODIGO = '$codigo'";

if (mysqli_query($conexion, $consulta)) {
    echo "Alumno eliminado correctamente.";
} else {
    echo "Error al eliminar el alumno: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

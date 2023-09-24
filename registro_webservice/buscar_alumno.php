<?php
include 'conexion.php';

$codigo = $_POST['codigo'];

$consulta = "SELECT * FROM registro WHERE CODIGO = '$codigo'";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "Código: " . $fila['CODIGO'] . "<br>";
            echo "Nombre: " . $fila['NOMBRES'] . "<br>";
            echo "Apellidos: " . $fila['APELLIDOS'] . "<br>";
            echo "Escuela: " . $fila['ESCUELA'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No se encontraron resultados para el código: $codigo";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

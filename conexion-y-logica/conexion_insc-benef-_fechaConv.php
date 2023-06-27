<?php
include("conexion.php");


$consulta4 = "SELECT fecha_entrega FROM convocatoria WHERE id = (SELECT MAX(id) FROM convocatoria)";
$resultado4 = mysqli_query($conection, $consulta4);

if (mysqli_num_rows($resultado4) > 0) {
    $fila = mysqli_fetch_assoc($resultado4);
    $fechaEntrega = $fila['fecha_entrega']; // Obtener el valor del campo 'fecha_entrega'
} else {
    $fechaEntrega = 'No hay fechas programadas'; // Establecer un valor por defecto si no se obtuvo ninguna fecha
}
?>
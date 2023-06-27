<?php

include("conexion.php");


$consulta1= "SELECT fecha_entrega FROM convocatoria
WHERE id = (SELECT MAX(id) FROM convocatoria)";
$resultadoConsulta1=mysqli_query($conection,$consulta1);

if (mysqli_num_rows($resultadoConsulta1) > 0) {
    $fila = mysqli_fetch_assoc($resultadoConsulta1);

    $fechaEntrega = $fila['fecha_entrega']; // Obtener el valor del campo 'fecha_entrega'
} else {
    $fechaEntrega = 'No hay fechas programadas'; // Establecer un valor por defecto si no se obtuvo ninguna fecha
}

?>
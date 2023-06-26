<?php
    include("conexion.php");

    $consulta1= "SELECT*FROM convocatoria
    WHERE id = (SELECT MAX(id) FROM convocatoria)";
    $resultadoConsulta1=mysqli_query($conection,$consulta1);

    if (mysqli_num_rows($resultadoConsulta1) > 0) {
        $fila = mysqli_fetch_assoc($resultadoConsulta1);
    
        $fechaInicio = $fila['fecha_inicio']; // Obtener el valor del campo 'fecha_inicio'
        $fechaFin = $fila['fecha_fin']; // Obtener el valor del campo 'fecha_fin'
        $fechaEntrega = $fila['fecha_entrega']; // Obtener el valor del campo 'fecha_entrega'
    } else {
        $fechaInicio = 'No hay fechas programadas';
        $fechaInicio = 'No hay fechas programadas';
        $fechaEntrega = 'No hay fechas programadas'; // Establecer un valor por defecto si no se obtuvo ninguna fecha
    }
    

?>
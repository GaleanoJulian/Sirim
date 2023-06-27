<?php
include("conexion.php");
session_start();
$email = $_SESSION['email'];

if (isset($_POST['convocar'])) {
    if (strlen($_POST['fecha-inicio']) >= 1 && strlen($_POST['fecha-fin']) >= 1) {
        // Consultas y código anterior

        $consulta1 = "SELECT id FROM usuario WHERE correo='$email'";
        $resultadoConsulta1 = mysqli_query($conection, $consulta1);
        $followingdataUser = $resultadoConsulta1->fetch_assoc();
        $id_user = $followingdataUser['id'];


        $consulta2 = "SELECT id FROM tareas_rol WHERE id_tarea='1' AND id_rol=(SELECT id_rol FROM usuario WHERE correo='$email')";
        $resultadoConsulta2 = mysqli_query($conection, $consulta2);
        $followingdataTarea = $resultadoConsulta2->fetch_assoc();
        $id_tarea = $followingdataTarea['id'];

        $insertar1 = "INSERT INTO responsable (id_tareaxrol, id_usuario) VALUES ('$id_tarea', '$id_user')";
        $resultadoInsertar1 = mysqli_query($conection, $insertar1);

        $fechaInicio = trim($_POST['fecha-inicio']);
        
        $fechaFin = trim($_POST['fecha-fin']);

        $fechaActual = date('Y-m-d');
        
        $fechaEntrega = date('Y-m-d', strtotime($fechaFin . ' +1 day'));

        if ($fechaActual >= $fechaInicio && $fechaActual <= $fechaFin && $fechaInicio != $fechaFin) {
            $eventoVigente = true;
        } else {
            $eventoVigente = false;
        }

           

        $consulta3 = "SELECT id FROM responsable WHERE id_usuario=(SELECT id FROM usuario 
        WHERE correo='$email') ORDER BY id DESC LIMIT 1";
        $resultadoConsulta3 = mysqli_query($conection, $consulta3);
        $filaConsulta3 = mysqli_fetch_assoc($resultadoConsulta3);
        $idResponsable = $filaConsulta3['id'];

        $insertar2 = "INSERT INTO convocatoria (fecha_inicio, fecha_fin, fecha_entrega, id_responsable) 
                      VALUES ('$fechaInicio', '$fechaFin', '$fechaEntrega', '$idResponsable')";
        $resultadoInsertar2 = mysqli_query($conection, $insertar2);



        if ($resultadoInsertar2) {
            echo '<script>
                window.location.href="../inicio-sesion/sesion.php";
                alert("Convocatoria generada con éxito") 
                </script>';
        } else {
            echo '<script>
                window.location.href="registro.php";
                alert("No se puede generar la convocatoria") 
                </script>';
        }
    }
}

$consulta4 = "SELECT fecha_entrega FROM convocatoria WHERE id = (SELECT MAX(id) FROM convocatoria)";
$resultado4 = mysqli_query($conection, $consulta4);

if (mysqli_num_rows($resultado4) > 0) {
    $fila = mysqli_fetch_assoc($resultado4);
    $fechaEntrega = $fila['fecha_entrega']; // Obtener el valor del campo 'fecha_entrega'
} else {
    $fechaEntrega = 'No hay fechas programadas'; // Establecer un valor por defecto si no se obtuvo ninguna fecha
}
?>
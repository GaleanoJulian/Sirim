<?php
session_start();

include("conexion.php");

$email=  $_SESSION['email'];

$consulta1="SELECT*FROM usuario INNER JOIN info_usuario ON info_usuario.id_usuario = usuario.id WHERE correo= '$email' order by info_usuario.id";
$resultado1=mysqli_query($conection, $consulta1);

if (mysqli_num_rows($resultado1) > 0) {
    $fila = mysqli_fetch_assoc($resultado1);

    $nombre = $fila['nombres']; // Obtener el valor del campo 'nombre'
    $apellido = $fila['apellidos']; // Obtener el valor del campo 'apellido'
    $email = $fila['correo'];
    $docType = $fila['tipo_doc_id'];
    $docNumber = $fila['doc_identidad']; 
    $genero = $fila['genero'];
    $diaNacimiento = $fila['dia_nacimiento'];
    $mesNacimiento = $fila['mes_nacimiento'];
    $anioNacimiento = $fila['anio_nacimiento'];
    $phone = $fila['telefono'];
    $direction = $fila['direccion'];
}

if (isset($_POST['update'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['last_name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['doc_type']) >= 1 &&
        strlen($_POST['doc_number']) >= 1 &&
        strlen($_POST['gender']) >= 1 &&
        strlen($_POST['birth_date']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['direction']) >= 1 
        ) {
            $nameU=trim($_POST['name']);
            $last_nameU=trim($_POST['last_name']);
            $doc_typeU=trim($_POST['doc_type']);
            $doc_numberU=trim($_POST['doc_number']);
            $genderU=trim($_POST['gender']);
            $birth_dateU=trim($_POST['birth_date']);
            $phoneU=trim($_POST['phone']);
            $directionU=trim($_POST['direction']);

            $consultaDatosActuales = "SELECT nombres, apellidos, tipo_doc_id, doc_identidad, genero, dia_nacimiento, mes_nacimiento, anio_nacimiento, direccion, telefono FROM usuario 
            INNER JOIN info_usuario ON info_usuario.id_usuario = usuario.id
            WHERE usuario.correo = '$email'";
            $resultadoDatosActuales = mysqli_query($conection, $consultaDatosActuales);
            $datosActuales = mysqli_fetch_assoc($resultadoDatosActuales);

            $consulta2 = "UPDATE usuario 
        INNER JOIN info_usuario ON info_usuario.id_usuario = usuario.id
        SET ";
        $updateValues = array();

        if ($nameU != $datosActuales['nombres']) {
            $updateValues[] = "usuario.nombres = '$nameU'";
        }
        if ($last_nameU != $datosActuales['apellidos']) {
            $updateValues[] = "usuario.apellidos = '$last_nameU'";
        }
        if ($doc_typeU != $datosActuales['tipo_doc_id']) {
            $updateValues[] = "info_usuario.tipo_doc_id = '$doc_typeU'";
        }
        if ($doc_numberU != $datosActuales['doc_identidad']) {
            $updateValues[] = "info_usuario.doc_identidad = '$doc_numberU'";
        }
        if ($genderU != $datosActuales['genero']) {
            $updateValues[] = "info_usuario.genero = '$genderU'";
        }
        if ($birth_dateU != $datosActuales['dia_nacimiento'].'/'.$datosActuales['mes_nacimiento'].'/'.$datosActuales['anio_nacimiento']) {
            $fecha_parts = explode('-', $birth_dateU);
            $anioNacimientoU = $fecha_parts[0];
            $mesNacimientoU = $fecha_parts[1];
            $diaNacimientoU = $fecha_parts[2];
            $updateValues[] = "info_usuario.dia_nacimiento = '$diaNacimientoU', info_usuario.mes_nacimiento = '$mesNacimientoU', info_usuario.anio_nacimiento = '$anioNacimientoU'";
        }
        if ($directionU != $datosActuales['direccion']) {
            $updateValues[] = "info_usuario.direccion = '$directionU'";
        }
        if ($phoneU != $datosActuales['telefono']) {
            $updateValues[] = "info_usuario.telefono = '$phoneU'";
        }

        if (!empty($updateValues)) {
            $consulta2 .= implode(", ", $updateValues);
            $consulta2 .= " WHERE usuario.correo = '$email'";

            // Ejecutar la consulta de actualización
            if (mysqli_query($conection, $consulta2)) {
                // Actualización exitosa
                echo "Los datos se han actualizado correctamente.";
            } else {
                // Error en la actualización
                echo "Error al actualizar los datos: " . mysqli_error($conection);
            }
        } else {
            echo "No se realizaron cambios en los datos existentes.";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conection);
    } else {
        echo '<script>
        window.location.href="../inicio-sesion/sesion.php";
        alert("No pueden existir campos vacios") 
        </script>';
    }
}

?>
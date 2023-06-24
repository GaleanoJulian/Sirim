<?php
session_start();

include("conexion.php");

$email=  $_SESSION['email'];

$consulta1="SELECT*FROM usuario INNER JOIN info_usuario ON info_usuario.id_usuario = usuario.id 
WHERE correo= '$email' order by info_usuario.id";
$resultado1=mysqli_query($conection, $consulta1);

if (mysqli_num_rows($resultado1) > 0) {
    $fila = mysqli_fetch_assoc($resultado1);

    $nombre = $fila['nombres']; // Obtener el valor del campo 'nombre'
    $apellido = $fila['apellidos']; // Obtener el valor del campo 'apellido'
    $correo = $fila['correo'];
    $docType = $fila['tipo_doc_id'];
    $docNumber = $fila['doc_identidad']; 
    $genero = $fila['genero'];
    $diaNacimiento = $fila['dia_nacimiento'];
    $mesNacimiento = $fila['mes_nacimiento'];
    $anioNacimiento = $fila['anio_nacimiento'];
    $phone = $fila['telefono'];
    $direction = $fila['direccion'];
}

/* Si al hacer click a través del método POST la variable update está definida 
y no es nula (todos los campos del formulario)*/

if (isset($_POST['update'])) {

    $emailU=trim($_POST['email']);

    if($emailU!=$correo){
        $consultaEmail = "UPDATE usuario SET correo ='$emailU' 
        where correo ='$email'";
        $resultadoEmail=mysqli_query($conection,$consultaEmail);

        if ($resultadoEmail){ /* Mirar si toca enviar correo de confirmación o algo similar*/
            echo '<script>
            window.location.href="../login.php";
            alert("Cambio de correo exitoso, vuelva a iniciar sesión") 
            </script>';
        }

    }else{
        /*Se traen los datos que el usuario ingrese como variables, de tal forma que
        se define que las variables serán igual a los datos que ingrese el usuario 
        en los campos definidos*/

        //Le pido que no me muestre el warning porque la variable no está definida (porque si están)

        error_reporting(0); 

        $nameU=trim($_POST['name']);
        $last_nameU=trim($_POST['last_name']);
        $doc_typeU=trim($_POST['doc_type']);
        $doc_numberU=trim($_POST['doc_number']);
        $genderU=trim($_POST['gender']);
        $birth_dateU=trim($_POST['birth_date']);
        $phoneU=trim($_POST['phone']);
        $directionU=trim($_POST['direction']);
        
        /*Se toma la variable de fecha definida y se le pide separarla en partes 
        para que se puedan meter a la base de datos como enteros en cada campo*/

        $fecha_parts = explode('-', $birth_dateU);
        $anioNacimientoU = $fecha_parts[0];
        $mesNacimientoU = $fecha_parts[1];
        $diaNacimientoU = $fecha_parts[2];

        /*Por el select, no funciona bien el cambio de información, por eso le estoy 
        pidiendo que si el tipo de documento llega a ser vacio, entonces que tome el
        valor que ya estaba definido desde antes */

        if ($doc_typeU==""){
            $doc_typeU=$docType;
        }

        if ($genderU==""){
            $genderU=$genero;
        }
             

        /*Se realiza un query a la base de datos, de tal forma que le pedimos que actualice
        los campos que se le indican según las variables definidas anteriormente, teniendo en
        cuenta que los datos deben coincidir con el usuario que haya iniciado sesión*/

        $consulta2 = "UPDATE info_usuario SET nombres='$nameU', apellidos='$last_nameU', tipo_doc_id='$doc_typeU',  
        doc_identidad='$doc_numberU', genero='$genderU', dia_nacimiento='$diaNacimientoU', mes_nacimiento='$mesNacimientoU', 
        anio_nacimiento='$anioNacimientoU', direccion='$directionU', telefono='$phoneU' 
        where id_usuario =(select id from usuario where correo ='$email')";

        /*Se solicita la consulta con mysqli_query mediante la conexión a la base de datos
        y la variable en que se definió el query*/

        $resultado2=mysqli_query($conection,$consulta2);

        /*Se establece la condición de que si sucede el resultado con exito, muestre un script
        de resgistro exitoso y vuelva a la sesión y si no un mensaje de no se pudo y vuelva a la sesión*/

        if($nameU==$nombre && $last_nameU==$apellido && $emailU==$correo && $doc_typeU==$docType &&
        $doc_numberU==$docNumber && $genderU==$genero && $diaNacimientoU==$diaNacimiento && 
        $mesNacimientoU==$mesNacimiento && $anioNacimientoU==$anioNacimiento && $phoneU==$phone  && 
        $directionU==$direction){
            echo '<script>
            window.location.href="../inicio-sesion/sesion.php";
            alert("No se realizaron cambios") 
            </script>';

        }    elseif ($resultado2){
            echo '<script>
            window.location.href="../inicio-sesion/sesion.php";
            alert("Cambios realizados con exito") 
            </script>';


        }else{
            echo '<script>
            window.location.href="../inicio-sesion/sesion.php";
            alert("No se pudo realizar el cambio") 
            </script>';
        }
    } 
}

?>
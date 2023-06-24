<?php
session_start();
include("conexion.php");
$email=  $_SESSION['email'];
echo '<script type="text/javascript">
test();
</script>';


$query_rol="SELECT id_rol FROM usuario WHERE correo='$email'";
$id_rolQuery = mysqli_query($conection, $query_rol); 
$followingdatarol = $id_rolQuery->fetch_assoc(); 
$id_rol = $followingdatarol['id_rol']; 

     
    // Generar el enlace de acuerdo al tipo de usuario
    if ($id_rol == 1 || $id_rol == 2) { // Administrador o voluntario
        include("../inicio-sesion/inscripcion-admin_volunt.php");
    } elseif ($id_rol == 3) { // Beneficiario
        include("../inicio-sesion/inscripcion-beneficiario.php");
    }
  
?>




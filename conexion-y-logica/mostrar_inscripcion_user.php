<?php
session_start();
include("conexion.php");
$email=  $_SESSION['email'];

$query_rol="SELECT * FROM rol";
$id_rolQuery = mysqli_query($conection, $query_rol); 
$followingdatarol = $id_rolQuery->fetch_assoc(); 
$id_rol = $followingdatarol['id']; 

     
    // Generar el enlace de acuerdo al tipo de usuario
    if ($id_rol == 1 || $id_rol == 2) { // Administrador o voluntario
        echo '<a href="./inscripcion-admin_volunt.php">Inscripciones</a>';
    } elseif ($id_rol == 3) { // Beneficiario
        echo '<a href="./inscripcion-beneficiario.php">Inscripciones</a>';
    }
  
?>
<?php
session_start();
include("conexion.php");
$email=  $_SESSION['email'];

$query_rol="SELECT id_rol FROM usuario WHERE correo='$email'";
$id_rolQuery = mysqli_query($conection, $query_rol); 
$followingdatarol = $id_rolQuery->fetch_assoc(); 
$id_rol = $followingdatarol['id_rol']; 

function isAdminVol($id_rol) {
    return ($id_rol == 1 || $id_rol == 2);
}
?>
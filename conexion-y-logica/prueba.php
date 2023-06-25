<?php
include("conexion.php");
session_start();
$email = $_SESSION['email'];

$fechaInicio = '1993-08-16';
        
$fechaFin = '1993-08-23';

$fechaActual = date('Y-m-d');

$fechaEntrega = date('Y-m-d', strtotime($fechaFin . ' +1 day'));

if ($fechaActual >= $fechaInicio && $fechaActual <= $fechaFin) {
    $eventoVigente = true;
} else {
    $eventoVigente = false;
}

if ($eventoVigente) {
    $vigencia = "Vigente";
} else {
    $vigencia = "No vigente";
};


// Ejemplo de uso:
echo " Fecha inicial: " . $vigencia . "<br><br>";
echo "Fecha de inicio: " . $fechaEntrega;

<?php
$host="127.0.0.1";
$port=3312;
$socket="";
$user="root";
$password="201111455Da.";
$dbname="rdb_sirim";

$conection = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

// Comprobando que la conexión con la base de datos es correcta

/* $query = "SELECT id, nombres, apellidos, tipo_documento, numero_documento, genero, fecha_nacimiento, telefono, direccion, fecha_ingreso FROM prueba.datos";


if ($stmt = $conection->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($id, $name, $last_name, $doc_type, $doc_number, $gender, $birth_date, $phone, $direction, $fecha);
    while ($stmt->fetch()) {
        echo "<table>
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$last_name,</td>
                    <td>$doc_type</td>
                    <td>$doc_number</td>
                    <td>$gender</td>
                    <td>$birth_date</td>
                    <td>$phone</td>
                    <td>$direction</td>
                    <td>$fecha</td>
                </tr>
               </table>";
    }
    $stmt->close();
}*/

?>
 
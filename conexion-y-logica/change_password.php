<?php 
require_once('conexion.php');
$id = $_POST['id'];
$pass = $_POST['new_password'];

$query = "UPDATE usuario set password= '$pass' WHERE id= $id";
$resultadoNewPass=mysqli_query($conection, $query);;

echo '<script>
window.location.href="../login.php?message=success_password";
alert("Inicia sesión con tu nueva contraseña") 
</script>';

?>
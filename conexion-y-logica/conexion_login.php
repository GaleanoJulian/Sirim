<?php
    include("conexion.php");
    
    if(isset($_POST['login'])){
        $usuario = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        $_SESSION['email']=$usuario;
        
        $verificacion="SELECT*FROM usuario INNER JOIN info_usuario ON info_usuario.id_usuario = usuario.id WHERE correo='$usuario' AND password='$password'";
        $valido=mysqli_query($conection, $verificacion);
        $count = mysqli_num_rows($valido);
        $row = mysqli_fetch_array($valido);

        if($count==1){
            if($row['estado'] == 'activo'){
                $_SESSION['name'] = $row['nombres'];
                $_SESSION['last_name'] = $row['apellidos'];
                header("Location:../inicio-sesion/sesion.php");
                exit();
            } else {
                echo '<script>
                    alert("Su cuenta se encuentra inactiva, por favor espere a que sea activada o comuniquese con la iglesia");
                    window.location.href = "../index.php";
                </script>';
            }
        } else {
            echo '<script>
                alert("Login falló. Usuario y/o contraseña inválidos");
                window.location.href = "../login.php";
            </script>';
        }
    }
?>
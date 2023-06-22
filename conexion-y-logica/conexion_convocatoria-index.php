<?php
    include("conexion.php");

    //Hay que cambiarlo todo para que consulte las 3 fechas que debe almacenar
    
    if(isset($_POST['login'])){ //Recordar poner el nombre del botón
        $usuario = $_POST['email']; 
        $password = $_POST['password'];

        $verificacion="SELECT*FROM login WHERE correo='$usuario' AND password='$password'";
        $valido=mysqli_query($conection, $verificacion);
        $row = mysqli_fetch_array($valido);
        $count = mysqli_num_rows($valido);
        if($count==1){
            header("Location:inicio-sesion/sesion.php");
        exit();
        }else{
            echo '<script>
                window.location.href="login.php";
                alert("Login falló. Usuario y/o contraseña inválidos")
            </script>';
        }
    }
?>
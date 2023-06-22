<?php 

    include("conexion.php");

    if (isset($_POST['register'])) {
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['last_name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['password']) >= 1 &&
            strlen($_POST['doc_type']) >= 1 &&
            strlen($_POST['doc_number']) >= 1 &&
            strlen($_POST['gender']) >= 1 &&
            strlen($_POST['birth_date']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['direction']) >= 1 
            ) {
                $name=trim($_POST['name']);
                $last_name=trim($_POST['last_name']);
                $email=trim($_POST['email']);
                $password=trim($_POST['password']);
                $doc_type=trim($_POST['doc_type']);
                $doc_number=trim($_POST['doc_number']);
                $gender=trim($_POST['gender']);
                $birth_date=trim($_POST['birth_date']);
                $phone=trim($_POST['phone']);
                $direction=trim($_POST['direction']);
                $fecha_ingreso=date("d/m/y");

                $query_rol="SELECT id FROM rol WHERE rol.rol = 'Beneficiario'"; //Hacer un select para traer el id de la PK y asignarselo a la FK
                $id_rolQuery = mysqli_query($conection, $query_rol); //Crear una variable que ejecute el query y lo traiga, es decir, es el resultado de una consulta
                $followingdatarol = $id_rolQuery->fetch_assoc(); //Obtener la consulta anterior en forma de array asociativo, es decir, asocia id_login con la columna que le indique
                $id_rol = $followingdatarol['id']; //Obtiene el valor asociado a la columna id, en este caso el valor que buscamos

                $consulta1="INSERT INTO usuario (correo, password, id_rol) /*colocar id_rol*/
                VALUES('$email','$password', '$id_rol')";
                $resultado1=mysqli_query($conection, $consulta1);

                $query_login="SELECT id FROM usuario ORDER BY id DESC LIMIT 1"; //Hacer un select para traer el id de la PK y asignarselo a la FK
                $id_usuario = mysqli_query($conection, $query_login); //Crear una variable que ejecute el query y lo traiga, es decir, es el resultado de una consulta
                $followingdata = $id_usuario->fetch_assoc(); //Obtener la consulta anterior en forma de array asociativo, es decir, asocia id_login con la columna que le indique
                $newid = $followingdata['id']; //Obtiene el valor asociado a la columna id, en este caso el valor que buscamos

                $fecha_parts = explode('-', $birth_date);
                $anioNacimiento = $fecha_parts[0];
                $mesNacimiento = $fecha_parts[1];
                $diaNacimiento = $fecha_parts[2];

                $consulta2="INSERT INTO info_usuario(nombres, apellidos, tipo_doc_id, doc_identidad, genero, dia_nacimiento, mes_nacimiento, anio_nacimiento, telefono, direccion, fecha_ingreso, id_usuario)
                    VALUES('$name','$last_name','$doc_type','$doc_number','$gender','$diaNacimiento','$mesNacimiento','$anioNacimiento','$phone','$direction','$fecha_ingreso','$newid')";
                $resultado2=mysqli_query($conection, $consulta2);


                if ($resultado1 && $resultado2){ //Aquí también se puede colocar un header("Location:pagina.php"); para que redirija a otra página
                    echo '<script>
                    window.location.href="login.php";
                    alert("Registro exitoso. Por favor inicie sesión") 
                    </script>';
                }else {
                    echo '<script>
                    window.location.href="registro.php";
                    alert("Ha ocurrido un error") 
                    </script>';
                }
            } else {
                echo '<script>
                window.location.href="registro.php";
                alert("No pueden existir campos vacios") 
                </script>';
            }

}
    
?>
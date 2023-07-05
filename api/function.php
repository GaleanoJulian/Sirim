<?php
    require "../conexion-y-logica/conexion.php";

    function error422($message){

        $data = [
            'status' => 422,
            'message' => $message,
        ];
        header("HTTP/1.0 422 Unprocessable Entity");
        echo json_encode($data);
        exit();
    }

//INSERT INTO

    //En inscribir usuarios desde admin-vol

    function insertDataInscription($userId){
        
        global $conection;

        session_start();
        $email=$_SESSION['email']; //Correo del que hace la inscripción

        $consulta1="SELECT id FROM usuario WHERE correo='$email'";
        $resultadoConsulta1 = mysqli_query($conection, $consulta1);
        $followingdataUser = $resultadoConsulta1->fetch_assoc();
        $id_userResp = $followingdataUser['id']; //id de la persona que hace la inscripción (para hallar al responsable)

        //Traer el id de la tabla tareas_rol para la tarea de inscribir usuarios en donde el rol del usuario sea el de quien hace la inscripción
        $consulta2 = "SELECT id FROM tareas_rol WHERE id_tarea='2' AND id_rol=(SELECT id_rol FROM usuario WHERE correo='$email')";
        $resultadoConsulta2 = mysqli_query($conection, $consulta2);
        $followingdataTarea = $resultadoConsulta2->fetch_assoc();
        $id_tarea_rol = $followingdataTarea['id']; //id de la tabla tareas_rol para determinar al responsable


        //Insertar al responsable de la tarea en la tabla responsable para poder obtener el id del responsable
        $insertar1 = "INSERT INTO responsable (id_tareaxrol, id_usuario) VALUES ($id_tarea_rol, $id_userResp)";
        $resultadoInsertar1 = mysqli_query($conection, $insertar1);
        
        
        //Consultar el id del responsable de hacer la convocatoria para poder obtenerlo para la tabla de inscripcion
        $consulta3 = "SELECT id FROM responsable WHERE id_usuario='$id_userResp' ORDER BY id DESC LIMIT 1";
        $resultadoConsulta3 = mysqli_query($conection, $consulta3);
        $filaConsulta3 = mysqli_fetch_assoc($resultadoConsulta3);
        $idResponsable = $filaConsulta3['id']; // id del responsable que se inserta en la columna id_responsable de la tabla inscrpción

        //de aquí se consigue la lista de id de usuarios a los que se van a inscribir
        $consulta4= "SELECT id AS idUserInscribir FROM usuario WHERE id = $userId";
        $resultadoConsulta4 = mysqli_query($conection, $consulta4);
        $filaConsulta4 = mysqli_fetch_assoc($resultadoConsulta4);
        $idUsuarioInsc = $filaConsulta4['idUserInscribir'];
        
        //consultar el id de la última convocatoria hecha
        $consulta5="SELECT MAX(id) AS idConvocatoria FROM convocatoria";
        $resultadoConsulta5 = mysqli_query($conection, $consulta5);
        $filaConsulta5 = mysqli_fetch_assoc($resultadoConsulta5);
        $idConvocatoria = $filaConsulta5['idConvocatoria'];

        $query = "INSERT INTO 
                    inscripcion (aprobado, id_convocatoria, id_usuario, id_responsable) 
                VALUES 
                    ('aprobado','$idConvocatoria','$idUsuarioInsc','$idResponsable')";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            $data = [
                'status' => 200,
                'message' => 'Customer Created Succesfully'
            ];
            header("HTTP/1.0 201 Created");
            return json_encode($data);
        }else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);                
        }
      
    }

        //En inscribir usuario desde beneficiario

        function insertDataInscrBenef(){
        
            global $conection;
    
            session_start();
            $email=$_SESSION['email']; //Correo del que hace la inscripción
    
            $consulta1="SELECT id FROM usuario WHERE correo='$email'";
            $resultadoConsulta1 = mysqli_query($conection, $consulta1);
            $followingdataUser = $resultadoConsulta1->fetch_assoc();
            $id_userResp = $followingdataUser['id']; //id de la persona que hace la inscripción (en este caso el usuario)

            
            //consultar el id de la última convocatoria hecha
            $consulta5="SELECT MAX(id) AS idConvocatoria FROM convocatoria";
            $resultadoConsulta5 = mysqli_query($conection, $consulta5);
            $filaConsulta5 = mysqli_fetch_assoc($resultadoConsulta5);
            $idConvocatoria = $filaConsulta5['idConvocatoria'];
    
            $query = "INSERT INTO 
                        inscripcion (aprobado, id_convocatoria, id_usuario) 
                    VALUES 
                        ('por aprobar','$idConvocatoria','$id_userResp')";
            $query_run = mysqli_query($conection, $query);
    
            if($query_run){
                $data = [
                    'status' => 200,
                    'message' => 'Customer Created Succesfully'
                ];
                header("HTTP/1.0 201 Created");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 500,
                    'message' => 'Internal server error'
                ];
                header("HTTP/1.0 500 Internal server error");
                return json_encode($data);                
            }
          
        }


    //Fin inscribir usuarios desde admin-vol

    //En tarjetas - Ingresar Productos Nuevos al almacén

//Fin INSERT INTO


//SELECT

    //En tarjetas - Ingresar Productos Nuevos al almacén

    function getPresentacionProd (){
        global $conection;
    $query = "SELECT * FROM presentacion_prod";
    $query_run = mysqli_query($conection,$query);

    if($query_run){
        if(mysqli_num_rows($query_run) > 0){
            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Presentacion list fetched successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 Presentacion list fetched successfully");
            return json_encode($data);
        }
        else{
            $data = [
                'status' => 404,
                'message' => 'No presentacion data found'
            ];
            header("HTTP/1.0 404 No presentacion data found");
            return json_encode($data);
        }
    }
    else{
        $data = [
            'status' => 500,
            'message' => 'Internal server error'
        ];
        header("HTTP/1.0 500 Internal server error");
        return json_encode($data);
    }


    }

    //En Gestión de usuarios

        //Función para traer todos los datos de la lista de usuarios
    
    function getUserList(){
        global $conection;

        $query = "SELECT * FROM usuario";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'User list fetched successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 User list fetched successfully");
                return json_encode($data);

            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No data found'
                ];
                header("HTTP/1.0 404 No data found");
                return json_encode($data);
            }

        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }
    }

        //Función para traer los roles de los usuarios

    function getUserRoles(){
        global $conection;

        $query = "SELECT * FROM rol";
        $query_run = mysqli_query($conection, $query);
        
        if($query_run){
            if(mysqli_num_rows($query_run) > 0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'Role list fetched successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 Role list fetched successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No role data found'
                ];
                header("HTTP/1.0 404 No role data found");
                return json_encode($data);
            }
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }
    }

    //Sirve para otras también//Función para traer datos del usuario sobre información de rol en otras tablas

    function getUsersWithRole(){
        global $conection;

        $query= "SELECT
            info_usuario.id AS infoUsuarioId,
            info_usuario.nombres AS nombres, 
            info_usuario.apellidos AS apellidos, 
            info_usuario.tipo_doc_id AS tipo_doc_id, 
            info_usuario.doc_identidad AS doc_identidad,
            rol.rol AS rolUser,
            rol.id AS rolId,
            usuario.id AS idUser,
            usuario.estado AS estado
            FROM info_usuario
            INNER JOIN usuario ON usuario.id=info_usuario.id_usuario
            INNER JOIN rol ON rol.id=usuario.id_rol ORDER BY info_usuario.id";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'User data fetched successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 User data fetched successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No user data found'
                ];
                header("HTTP/1.0 404 No user data found");
                return json_encode($data);
            }
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }

    }

    //Para consultar y aprobar inscripciones desde admin-vol

    function getUsersInscripcion(){
        global $conection;

        $query= "SELECT
        info_usuario.id AS infoUsuarioId,
        info_usuario.nombres AS nombres, 
        info_usuario.apellidos AS apellidos, 
        info_usuario.tipo_doc_id AS tipo_doc_id, 
        info_usuario.doc_identidad AS doc_identidad,
        rol.rol AS rolUser,
        rol.id AS rolId,
        usuario.id AS idUser,
        usuario.estado AS estado,
        convocatoria.id AS idConvocatoria,
		convocatoria.fecha_entrega AS fechaEntrega,
		inscripcion.aprobado AS estadoInscripcion 
        FROM info_usuario
        INNER JOIN usuario ON usuario.id=info_usuario.id_usuario
        INNER JOIN rol ON rol.id=usuario.id_rol
        INNER JOIN inscripcion ON inscripcion.id_usuario=usuario.id
        INNER JOIN convocatoria ON convocatoria.id=inscripcion.id_convocatoria
        ORDER BY info_usuario.id";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'User data fetched successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 User data fetched successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No user data found'
                ];
                header("HTTP/1.0 404 No user data found");
                return json_encode($data);
            }
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }

    }
   
    //Fin consultar y aprobar convocatorias desde admin-vol

    //Consultar convocatorias desde beneficiario

    function getUsersInscInfo(){
        global $conection;

        session_start();
        $email=$_SESSION['email'];


        $query= "SELECT
        usuario.id AS idUser,
        usuario.estado AS estado,
        convocatoria.id AS idConvocatoria,
        convocatoria.fecha_entrega AS fechaEntrega,
        inscripcion.aprobado AS estadoInscripcion 
        FROM usuario
        INNER JOIN inscripcion ON inscripcion.id_usuario = usuario.id
        INNER JOIN convocatoria ON convocatoria.id = inscripcion.id_convocatoria 
        WHERE usuario.correo = '$email'";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'User data fetched successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 User data fetched successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No user data found'
                ];
                header("HTTP/1.0 404 No user data found");
                return json_encode($data);
            }
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }

    }
    
    //Fin consultar convocatorias desde beneficiario

    

//Fin SELECT

//UPDATE

    // En Gestión de usuarios

        // Función para cambiar de rol a los usuarios

    function updateUserRole($userId, $newRoleId){
        global $conection;

        $query = "UPDATE usuario SET id_rol = $newRoleId WHERE id = $userId";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            $data = [
                'status' => 200,
                'message' => 'User Rol updated successfully'
            ];
            header("HTTP/1.0 200 User Rol updated successfully");
            return json_encode($data);
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }

    }

        //Función para cambiar el estado de los usuarios

    function updateUserStatus($userId,$newUserStatus){
        global $conection;
        $query = "UPDATE usuario SET estado = '$newUserStatus' WHERE id=$userId";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            $data = [
                'status' => 200,
                'message' => ' User Status updated successfully'
            ];
            header("HTTP/1.0 200 User Status updated successfully");
            return json_encode($data);
        }else{
            $data = [
                'status' => 500,
                'message' => 'Internal server error'
            ];
            header("HTTP/1.0 500 Internal server error");
            return json_encode($data);
        }
    }

    //Fin Gestión de usuarios

    //Inscripcion de usuarios

            //Función para cambiar el estado de los usuarios

            function updateUserInscripcion($userId,$newUserInscripcion){
                global $conection;

                session_start();
                $email=$_SESSION['email']; //Correo del que hace la novedad de la inscripcion

                $consulta1="SELECT id FROM usuario WHERE correo='$email'";
                $resultadoConsulta1 = mysqli_query($conection, $consulta1);
                $followingdataUser = $resultadoConsulta1->fetch_assoc();
                $id_userResp = $followingdataUser['id']; //id de la persona que hace la novedad de la inscripción (para hallar al responsable)

                //Traer el id de la tabla tareas_rol para la tarea de inscribir usuarios en donde el rol del usuario sea el de quien hace la novedad de la inscripción
                $consulta2 = "SELECT id FROM tareas_rol WHERE id_tarea='2' AND id_rol=(SELECT id_rol FROM usuario WHERE correo='$email')";
                $resultadoConsulta2 = mysqli_query($conection, $consulta2);
                $followingdataTarea = $resultadoConsulta2->fetch_assoc();
                $id_tarea_rol = $followingdataTarea['id']; //id de la tabla tareas_rol para determinar al responsable


                //Insertar al responsable de la tarea en la tabla responsable para poder obtener el id del responsable
                $insertar1 = "INSERT INTO responsable (id_tareaxrol, id_usuario) VALUES ($id_tarea_rol, $id_userResp)";
                $resultadoInsertar1 = mysqli_query($conection, $insertar1);
                
                
                //Consultar el id del responsable de hacer la convocatoria para poder obtenerlo para la tabla de inscripcion
                $consulta3 = "SELECT id FROM responsable WHERE id_usuario='$id_userResp' ORDER BY id DESC LIMIT 1";
                $resultadoConsulta3 = mysqli_query($conection, $consulta3);
                $filaConsulta3 = mysqli_fetch_assoc($resultadoConsulta3);
                $idResponsable = $filaConsulta3['id']; // id del responsable que se inserta en la columna id_responsable de la tabla inscrpción

                $query = "UPDATE inscripcion SET aprobado = '$newUserInscripcion', id_responsable=$idResponsable WHERE id=$userId";
                $query_run = mysqli_query($conection, $query);
        
                if($query_run){
                    $data = [
                        'status' => 200,
                        'message' => ' User Status updated successfully'
                    ];
                    header("HTTP/1.0 200 User Status updated successfully");
                    return json_encode($data);
                }else{
                    $data = [
                        'status' => 500,
                        'message' => 'Internal server error'
                    ];
                    header("HTTP/1.0 500 Internal server error");
                    return json_encode($data);
                }
            }

    //Fin Inscripción de usuarios

//Fin UPDATE


//DELETE

    function deleteUser($idUser){

        global $conection;

        if($idUser == null){

            return error422('Enter the user id');

        }

        $query = "DELETE FROM usuario WHERE id=$idUser LIMIT 1";
        $result = mysqli_query($conection,$query);

        if($result){

            $data = [
                'status' => 200,
                'message' => 'User Deleted Succesfully',
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);

        }else{

            $data = [
                'status' => 404,
                'message' => 'User Not Found',
            ];
            header("HTTP/1.0 400 Not Found");
            return json_encode($data);

        }
    }

//Fin DELETE

?>
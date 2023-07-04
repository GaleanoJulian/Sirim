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

    function storeCustomer($customerInput){

        global $conection;
        
        $name = mysqli_real_escape_string($conection, $customerInput['name']); //ejemplo
        $email = mysqli_real_escape_string($conection, $customerInput['email']); //ejemplo
        $phone = mysqli_real_escape_string($conection, $customerInput['phone']); //ejemplo

        if(empty(trim($name))){

            return error422('Enter your name');

        }elseif(empty(trim($email))){

            return error422('Enter your email');

        }elseif(empty(trim($email))){

            return error422('Enter your phone');

        }
        else{
            $query ="INSERT INTO customers(name,email,phone) VALUES ('$name','$email','$phone')";
            $result = mysqli_query($conection,$query);

            if($result){
                $data = [
                    'status' => 201,
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
    }

    //Fin INSERT INTO


    //SELECT
    
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

    //Fin SELECT

    //UPDATE

    function updateCustomer($customerInput, $customerParams){

        if(!isset($customerParams['id'])){

            return error422('Customer id not found in URL');

        }elseif($customerParams['id'] == null){

            return error422('Enter the customer id');

        }

        global $conection;

        $customerId = mysqli_real_escape_string($conection, $customerParams['id']); //ejemplo
        
        $name = mysqli_real_escape_string($conection, $customerInput['name']); //ejemplo
        $email = mysqli_real_escape_string($conection, $customerInput['email']); //ejemplo
        $phone = mysqli_real_escape_string($conection, $customerInput['phone']); //ejemplo

        if(empty(trim($name))){

            return error422('Enter your name');

        }elseif(empty(trim($email))){

            return error422('Enter your email');

        }elseif(empty(trim($email))){

            return error422('Enter your phone');

        }
        else{
            $query ="UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id='$customerId' LIMIT 1";
            $result = mysqli_query($conection,$query);

            if($result){
                $data = [
                    'status' => 200,
                    'message' => 'Customer Updated Succesfully'
                ];
                header("HTTP/1.0 200 Success");
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
    }

    //Fin UPDATE


    //UPDATE que hizo Cami


    function updateUserRole($userId, $newRoleId){
        global $conection;

        $query = "UPDATE usuario SET id_rol = $newRoleId WHERE id = $userId";
        $query_run = mysqli_query($conection, $query);

        if($query_run){
            $data = [
                'status' => 200,
                'message' => 'User updated successfully'
            ];
            header("HTTP/1.0 200 User updated successfully");
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

    //Fin UPDATE Cami


    //DELETE

    function deleteCustomer($customerParams){

        global $conection;

        if(!isset($customerParams['id'])){

            return error422('Customer id not found in URL');

        }elseif($customerParams['id'] == null){

            return error422('Enter the customer id');

        }

        $customerId = mysqli_real_escape_string($conection, $customerParams['id']); //ejemplo

        $query = "DELETE FROM customers WHERE id='$customerId' LIMIT 1";
        $result = mysqli_query($conection, $query);

        if($result){

            $data = [
                'status' => 200,
                'message' => 'Customer Deleted Succesfully',
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);

        }else{

            $data = [
                'status' => 404,
                'message' => 'Customer Not Found',
            ];
            header("HTTP/1.0 400 Not Found");
            return json_encode($data);

        }

    }

   //Fin DELETE
?>
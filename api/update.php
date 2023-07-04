<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: PUT');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

    include("function.php");
    error_reporting(E_ERROR | E_PARSE);
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $functionName = $_GET['functionName'];
    
    if(trim($requestMethod) == "PUT"){
        if($functionName == 'updateUserRole'){
            $inputData = json_decode(file_get_contents("php://input"), true);
            $result = updateUserRole($inputData['userId'], $inputData['newRoleId']);
            echo $result;
        }
        else{
            $data = [
                'status' => 405,
                'message' => "Function $functionName Not Allowed",
            ];
            header("HTTP/1.0 405 Function $functionName Not Allowed");
            echo json_encode($data);
        }
       
        
    }
    else{
        $data = [
            'status' => 405,
            'message' => $requestMethod. ' Method Not Allowed',
        ];
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode($data);
    }
?>
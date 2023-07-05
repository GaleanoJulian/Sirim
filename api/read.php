<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: GET');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

    include("function.php");
    error_reporting(E_ERROR | E_PARSE);
    $requestMethod = $_SERVER["REQUEST_METHOD"]; 
    $functionName = $_GET['functionName'];

    if($requestMethod == "GET"){
        if($functionName == "getUserRoles"){
            $roleList = getUserRoles();
            echo $roleList;
        }
        elseif($functionName == "getUserList"){
            $userList = getUserList();
            echo $userList;
        }
        elseif($functionName == "getUsersWithRole"){
            $userList = getUsersWithRole();
            echo $userList;
        }
        elseif($functionName == "getPresentacionProd"){
            $presentacionList = getPresentacionProd();
            echo $presentacionList;
        }
        elseif($functionName == "getUsersInscripcion"){
            $inscripcionList = getUsersInscripcion();
            echo $inscripcionList;
        }
        elseif($functionName == "getUsersInscInfo"){
            $inscripcionList = getUsersInscInfo();
            echo $inscripcionList;
        }
        
    }
    else{
        $data = [
            'status' => 405,
            'message' => $requestMethod. ' Method not allowed'
        ];
        header("HTTP/1.0 405 method not allowed");
        echo json_encode($data);
    }
?>

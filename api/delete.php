<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

    include("function.php");
    error_reporting(E_ERROR | E_PARSE);
    $requestMethod = $_SERVER["REQUEST_METHOD"]; 
   

    if($requestMethod == "DELETE"){

        $deleteCustomer = deleteCustomer($_GET);
        echo $deleteCustomer;

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

<?php 

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Header: Origin, content-Type, Accept');

require_once '../dbc.php';

$dbs = new Dbc();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($dbs->validate_param($_POST['sipmAdminEmail'])){
        $sipmAdminEmail = $dbs->test_input($_POST['sipmAdminEmail']); 
    }else{
      echo json_encode([
            'message'=> 'email field cannot be empty',
            'status'=>405
        ]);
    }
    if($dbs->validate_param($_POST['sipmAdminPassword'])){
        $sipmAdminPassword = $dbs->test_input($_POST['sipmAdminPassword']); 
    }else{
     echo json_encode([
            'message'=> 'password field cannot be empty',
            'status'=>405
        ]);
    }
    $logAdmin = $dbs->logAdmin($sipmAdminEmail);
    if($logAdmin != null){
        if(password_verify($sipmAdminPassword, $logAdmin['sipmAdminPassword'])){
            echo json_encode([
                'message'=>'login successfully',
                'status'=>200
            ]);
        }else{
            echo json_encode([
                'message'=>'password incorrect',
                'status'=>402
            ]);
        }
    }else{
        echo json_encode([
            'message'=>'user not found',
            'status'=>402
        ]);
    }
}else{
    echo json_encode([
        'message'=> 'Error Method',
        'status'=>402
    ]);
}
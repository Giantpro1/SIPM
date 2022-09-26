<?php 


header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Header: Origin, content-Type, Accept');

require_once '../dbc.php';

$dbs = new Dbc();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['DisapproveUser'])){
        $id = $_POST['DisapproveUser'];
        $disapproveUser = $dbs-> disapproveUser($id, 2);
        echo json_encode([
            'message'=>'Done',
            'status'=>200
        ]);
    }else{
      echo json_encode([
            'message'=>'wrong format',
            'status'=>402
        ]);
    }
}else{
    echo json_encode([
        'message'=>'error wrong method',
        'status'=>405
    ]);
}
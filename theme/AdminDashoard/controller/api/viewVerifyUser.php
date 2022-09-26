<?php 


header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Header: Origin, content-Type, Accept');

require_once '../dbc.php';

$dbs = new Dbc();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['viewUser'])){
        $id = $_POST['viewUser'];
        $data = $dbs->viewUserAccount(1, $id);
        echo json_encode([
            'message'=>$data,
            'status'=>200
        ]);
    }else{
        echo json_encode([
            'message'=>'something went wrong',
            'status'=>402
        ]);
    }
}else{
  echo json_encode([
        'message'=>'error',
        'status'=>405
    ]);
}
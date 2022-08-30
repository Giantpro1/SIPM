<?php

        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Header: Origin, content-Type, Accept');

        require_once '../controller/dbc.php';

        $dbs = new Dbc();

    
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($dbs->validate_param($_POST['simp_UserName'])){
                $simp_UserName = $dbs->test_input($_POST['simp_UserName']);
                $simpUser_Password = $dbs->test_input($_POST['simpUser_Password']); 
                $logSimpUser = $dbs->simpUsers_Login($simp_UserName);
                if($logSimpUser != null){
                    if(password_verify($simpUser_Password,$logSimpUser['simpUser_Password'])){
                        echo json_encode([
                            "message"=> "login Successfully",
                            "status"=>200
                        ]);
                    }else{
                        echo json_encode([
                            "message"=>"password Incorrect",
                            "status"=>402
                        ]);
                    }
                }else{
                    echo json_encode([
                        "message"=>"user not found",
                        "status"=>404
                    ]);
                }
            }else{
                echo json_encode([
                    "message"=>"Email Field cannot be empty",
                    "status"=>404
                ]);
            }
        }else{
            echo json_encode([
                "message"=> "Error",
                "status"=>405
            ]);
        }
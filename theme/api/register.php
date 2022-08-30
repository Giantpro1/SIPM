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

            }else{
                echo json_encode([
                    "message"=>"fullname cannot be empty",
                    "status"=>402
                ]);
            }
            if($dbs->validate_param($_POST['simpUser_Email'])){
                $simpUser_Email = $dbs->test_input($_POST['simpUser_Email']);

            }else{
                echo json_encode([
                    "message"=>"Email cannot be empty",
                    "status"=>402
                ]);
            }
            if($dbs->validate_param($_POST['simpUser_Password'])){
                $simpUser_Password = $dbs->test_input($_POST['simpUser_Password']);

            }else{
                
                echo json_encode([
                    "message"=>"password cannot be empty",
                    "status"=>402
                ]);
                die();
            }
                if($dbs->user_exitsUserName($simp_UserName)){
                    echo json_encode([
                        "message"=>"user already exits",
                        "status"=>402
                    ]);
                }else {
                    $hpass = password_hash($simpUser_Password, PASSWORD_DEFAULT);
                    $dbs->registerSimpUser($simp_UserName, $simpUser_Email, $hpass);
                    echo json_encode([
                        "message"=>"registration succesfull",
                        "status"=>200
                    ]);
                }
        }else{
            echo json_encode([
                "message"=>"error",
                "status"=>402
            ]);
            die();
        }
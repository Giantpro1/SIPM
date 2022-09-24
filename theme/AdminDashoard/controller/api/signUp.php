<?php

        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Header: Origin, content-Type, Accept');

        require_once '../dbc.php';

        $dbs = new Dbc();

    
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($dbs->validate_param($_POST['sipmAdminFirstName'])){
                $sipmAdminFirstName = $dbs->test_input($_POST['sipmAdminFirstName']);
            }else{
                echo json_encode([
                    "message"=>"FirstName Field cannot be empty",
                    "status"=>404
                ]);
            }
               if($dbs->validate_param($_POST['sipmAdminLastName'])){
                $sipmAdminLastName = $dbs->test_input($_POST['sipmAdminLastName']);
            }else{
                echo json_encode([
                    'message'=>'Lastname field cannot be empty',
                    'status'=>402
                ]);
               }
                if($dbs->validate_param($_POST['sipmAdminEmail'])){
                $sipmAdminEmail = $dbs->test_input($_POST['sipmAdminEmail']);
            }else{
              echo json_encode([
                    'message'=>'email field cannot be empty',
                    'status'=>404
                ]);
            }
                if($dbs->validate_param(['sipmAdminPassword'])){
                    $sipmAdminPassword = $dbs->test_input($_POST['sipmAdminPassword']);
                }else{
                  echo json_encode([
                        'message'=> 'password field cannot be empty',
                        'status'=>404
                    ]);
                }
                if($dbs->user_exitsEmail($sipmAdminEmail)){
                    echo json_encode([
                        'message'=>'user already exits',
                        'status'=>402
                    ]);
                }else{
                    $hpass = password_hash($sipmAdminPassword, PASSWORD_DEFAULT);
                    $dbs->regisAdmin($sipmAdminFirstName, $sipmAdminLastName, $sipmAdminEmail, $hpass);
                    echo json_encode([
                        'message'=>'registeration successfully',
                        'status'=>200
                    ]);
                }
        }else{
            echo json_encode([
                "message"=> "Error",
                "status"=>402
            ]);
        }
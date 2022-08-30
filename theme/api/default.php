<?php
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Header: Origin, content-Type, Accept');

        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            echo json_encode([
                "message"=>"Welcome to our new API Class",
                "status"=>200
            ]);
        }else{
            echo json_encode([
                "message"=>"Wrong Method passed",
                "status"=>400
            ]);
            die(
                header('HTTP/1.1 405 Request Method not allowed')
            );
        }
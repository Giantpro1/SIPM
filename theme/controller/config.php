<?php
 class Database {
  
    //  connect to database
    private $duser = "root";
    private $dsn = "mysql:host=localhost; dbname=smartproduct";
    private $pass = "";

    public $conn;
//     throw error if connection is false
    public function __construct(){
        try {
            $this->conn = new PDO($this->dsn, $this->duser, $this->pass);
            // echo 'The DB is connected successfully';
        } catch (PDOException $e) {
            echo 'Error: ' .$e->getMessage();
        }

        return $this->conn;
    }

        //  protect users data from hackers
    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}



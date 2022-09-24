<?php 

require_once 'config.php';

class Dbc extends Database{
    public function regisAdmin($sipmAdminFirstName, $sipmAdminLastName, $sipmAdminEmail, $sipmAdminPassword){
        $sql = "INSERT INTO simp_admin (sipmAdminFirstName, sipmAdminLastName, sipmAdminEmail, sipmAdminPassword) VALUES (:sipmAdminFirstName, :sipmAdminLastName, :sipmAdminEmail, :sipmAdminPassword)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmAdminFirstName'=>$sipmAdminFirstName,
            'sipmAdminLastName'=>$sipmAdminLastName,
            'sipmAdminEmail'=>$sipmAdminEmail,
            'sipmAdminPassword'=>$sipmAdminPassword
        ]);
        return true;
    }

    public function logAdmin($sipmAdminEmail){
        $sql = "SELECT sipmAdminEmail, sipmAdminPassword FROM simp_admin WHERE sipmAdminEmail=:sipmAdminEmail ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmAdminEmail'=>$sipmAdminEmail
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function validate_param($value){
        return (!empty($value));
   }

   public function user_exitsEmail($sipmAdminEmail){
    $sql = "SELECT sipmAdminEmail FROM simp_admin WHERE sipmAdminEmail=:sipmAdminEmail";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
     'sipmAdminEmail'=>$sipmAdminEmail
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
 }
}
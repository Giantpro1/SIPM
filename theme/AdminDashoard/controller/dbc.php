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

    public function fetchPendingUser($value){
        $sql = "SELECT * FROM sipmusers WHERE sipmUser_Verify = '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewUserAccount($value, $id){
        $sql = "SELECT * FROM sipmusers WHERE sipmUser_Verify ='$value' AND id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function fetchVerifyUser($value){
        $sql = "SELECT * FROM sipmusers WHERE sipmUser_Verify = '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function fetchDisapprovedUser($value){
        $sql = "SELECT * FROM sipmusers WHERE sipmUser_Verify = '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }


    public function verifyUser($id, $value){
        $sql = "UPDATE sipmusers SET sipmUser_Verify ='$value' WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        return true;
    }
    public function disapproveUser($id, $value){
        $sql = "UPDATE sipmusers SET sipmUser_Verify ='$value' WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        return true;
    }
    public function deleteUser($id, $value){
        $sql = "UPDATE sipmusers SET sipmUser_Verify ='$value' WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        return true;
    }

    public function fetchAllPendingAds($value){
        $sql = "SELECT * FROM (sipmusersads JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId) WHERE
         (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function ViewAllProduct($sipmuser_PostId, $value){
        $sql = "SELECT * FROM sipmusersads LEFT JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId WHERE (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') AND sipmuser_PostId=:sipmuser_PostId";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmuser_PostId'=>$sipmuser_PostId
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function productAction($value, $sipmuser_PostId, $simpUser_ImgId){
       $sql = "UPDATE sipmusersads SET sipmUser_AdsVerified='$value' WHERE sipmuser_PostId=:sipmuser_PostId";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([
        'sipmuser_PostId'=>$sipmuser_PostId    
       ]);
        if($stmt){
            $sql = "UPDATE sipmusersads_img SET sipmUser_AdsImgVerified='$value' WHERE simpUser_ImgId=:simpUser_ImgId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
        }
        return true;
    }

    public function fetchDisapproveProduct($value){
        $sql = "SELECT * FROM sipmusersads WHERE sipmUser_AdsVerified='$value'";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            $sql = "SELECT * FROM sipmusersads_img WHERE sipmUser_AdsImgVerified='$value'";
            $stmt =$this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public function countAccStatus($value){
        $sql = "SELECT * FROM sipmusers WHERE sipmUser_Verify='$value'";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute();
      $result=   $stmt->rowCount();
        return $result;
    }
}
// SELECT * FROM sipmusersads LEFT JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId WHERE (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value')
// LEFT JOIN sipmusersads_img ON (sipmuser_PostId=simpUser_ImgId) SET (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') WHERE (sipmuser_PostId=:sipmuser_PostId AND simpUser_ImgId=:simpUser_ImgId)
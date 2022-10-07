<?php
require_once 'config.php';

class Dbc extends Database{

    // register user
    public function registerSimpUser($unique_id, $simp_UserName, $simpUser_Email, $simpUser_Password){
        $sql = "INSERT INTO sipmusers (unique_id, simp_UserName, simpUser_Email, simpUser_Password) VALUES (:unique_id, :simp_UserName, :simpUser_Email, :simpUser_Password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'unique_id'=>$unique_id,
            'simp_UserName'=>$simp_UserName,
            'simpUser_Email'=>$simpUser_Email,
            'simpUser_Password'=>$simpUser_Password
        ]);
        return true;
    }

    // to check empty field
  public function validate_param($value){
            return (!empty($value));
       }

       // to check for user email exit
    public function user_exitsEmail($simpUser_Email){
       $sql = "SELECT simpUser_Email FROM sipmusers WHERE simpUser_Email=:simpUser_Email";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([
        'simpUser_Email'=>$simpUser_Email
       ]);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result;
    }

    // to check for user  exit
    public function user_exitsUserName($simp_UserName){
        $sql = "SELECT simp_UserName FROM sipmusers WHERE simp_UserName=:simp_UserName";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_UserName'=>$simp_UserName
        ]);
        $resultFectch =$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultFectch;
    }
    
    // user login
     public function simpUsers_Login($simp_UserName, $value){
        $sql = "SELECT simp_UserName, simpUser_Password FROM sipmusers WHERE simp_UserName=:simp_UserName AND simpUser_AccDelete='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_UserName'=>$simp_UserName
        ]);
        $rowFectch = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rowFectch;
     }

     // grad all curren user data
     public function simp_CurrentUser($simp_UserName){
        $sql = "SELECT * FROM  sipmusers WHERE simp_UserName=:simp_UserName";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_UserName'=>$simp_UserName
        ]);
        $rowFetch = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rowFetch;
     }

        //update profile
     public function simpUsers_UpdateProfile($sipmUser_FirstName, $sipmUser_SecondName, $sipmUser_CommunityName, $sipmUser_HidePro, $simpUser_ZipCode, $sipmUser_ProfileImg, $id){
        $sql ="UPDATE sipmusers SET sipmUser_FirstName=:sipmUser_FirstName, sipmUser_SecondName=:sipmUser_SecondName, sipmUser_CommunityName=:sipmUser_CommunityName, sipmUser_HidePro=:sipmUser_HidePro, simpUser_ZipCode=:simpUser_ZipCode, sipmUser_ProfileImg=:sipmUser_ProfileImg WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmUser_FirstName'=>$sipmUser_FirstName,
            'sipmUser_SecondName'=>$sipmUser_SecondName,
            'sipmUser_CommunityName'=>$sipmUser_CommunityName,
            'sipmUser_HidePro'=>$sipmUser_HidePro,
            'simpUser_ZipCode'=>$simpUser_ZipCode,
            'sipmUser_ProfileImg'=>$sipmUser_ProfileImg,
            'id'=>$id
        ]);
     }

     // ads upload
     public function simpUser_UploadingAds($simp_Cid, $sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsCategory, $sipmUser_AdsPrice, $sipmUser_AdsNegotiation, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $sipmUser_AdsContactEmail, $sipmUser_AdsContactAddress){
         $sql = "INSERT INTO sipmusersads (simp_Cid, sipmuser_PostId, simpUser_AdsTitle, sipmUser_AdsType, sipmUser_AdsDescripion, sipmUser_AdsCategory, sipmUser_AdsPrice, sipmUser_AdsNegotiation, sipmUser_AdsContactName, sipmUser_AdsContactNumber, sipmUser_AdsContactEmail, sipmUser_AdsContactAddress) VALUES (:simp_Cid, :sipmuser_PostId, :simpUser_AdsTitle, :sipmUser_AdsType, :sipmUser_AdsDescripion, :sipmUser_AdsCategory, :sipmUser_AdsPrice, :sipmUser_AdsNegotiation, :sipmUser_AdsContactName, :sipmUser_AdsContactNumber, :sipmUser_AdsContactEmail,:sipmUser_AdsContactAddress)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_Cid'=>$simp_Cid,
            'sipmuser_PostId'=>$sipmuser_PostId,
            'simpUser_AdsTitle'=>$simpUser_AdsTitle,
            'sipmUser_AdsType'=>$sipmUser_AdsType,
            'sipmUser_AdsDescripion'=>$sipmUser_AdsDescripion,
            'sipmUser_AdsCategory'=>$sipmUser_AdsCategory,
            'sipmUser_AdsPrice'=>$sipmUser_AdsPrice,
            'sipmUser_AdsNegotiation'=>$sipmUser_AdsNegotiation,
            'sipmUser_AdsContactName'=>$sipmUser_AdsContactName,
            'sipmUser_AdsContactNumber'=>$sipmUser_AdsContactNumber,
            'sipmUser_AdsContactEmail'=>$sipmUser_AdsContactEmail,
            'sipmUser_AdsContactAddress'=>$sipmUser_AdsContactAddress
        ]);
        return true;
    
     }

 // ads img upload
     public function simpUser_UploadingAdsImg($simp_Cid, $simpUser_ImgId, $simpUser_AdsImg){
        $sql = "INSERT INTO sipmusersads_img (simp_Cid, simpUser_ImgId, simpUser_AdsImg) VALUES (:simp_Cid, :simpUser_ImgId, :simpUser_AdsImg)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_Cid'=>$simp_Cid,
            'simpUser_ImgId'=>$simpUser_ImgId,
            'simpUser_AdsImg'=>$simpUser_AdsImg
        ]);
        return true;
     }

    //  change email
    public function sipmUser_ChangeEmail($simpUser_Email, $id){
       $sql = "UPDATE sipmusers SET simpUser_Email=:simpUser_Email WHERE id=:id";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([
        'simpUser_Email'=>$simpUser_Email,
        'id'=>$id
       ]);

    }

    // change password

    public function sipmUser_Password($simpUser_Password, $id){
        $sql  = "UPDATE sipmusers SET simpUser_Password=:simpUser_Password WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_Password'=>$simpUser_Password,
            'id'=>$id
        ]);
    }

    // change Email
    public function sipmUser_ChangEmail($simpUser_Email, $id){
        $sql  = "UPDATE sipmusers SET simpUser_Email=:simpUser_Email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_Email'=>$simpUser_Email,
            'id'=>$id
        ]);
    }

    // grad all user ads post 

    public function get_SipmUSerAds($simp_Cid, $value){
        $sql = "SELECT * FROM sipmusersads WHERE simp_Cid=:simp_Cid AND sipmUser_AdsDelete='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_Cid'=>$simp_Cid
        ]);
        $fetchAds = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchAds;
    }

    public function get_SipmUSerAdsImg($simpUser_ImgId, $value){
        $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgDelete='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_ImgId'=>$simpUser_ImgId
        ]);
        $fetchAds = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchAds;
    }

        // delete ads

        public function deleteSimpUserAds($value, $sipmuser_PostId){
            $sql = "UPDATE  sipmusersads SET sipmUser_AdsDelete='$value' WHERE sipmuser_PostId=:sipmuser_PostId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'sipmuser_PostId'=>$sipmuser_PostId
            ]);
            return true;
        }
        public function deleteSimpUserAdImg($value, $simpUser_ImgId){
            $sql = "UPDATE sipmusersads_img SET sipmUser_AdsImgDelete='$value' WHERE simpUser_ImgId=:simpUser_ImgId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
            return true;
        }

        public function Viewget_SipmUSerAds($sipmuser_PostId){
            $sql = "SELECT * FROM sipmusersads WHERE sipmuser_PostId=:sipmuser_PostId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'sipmuser_PostId'=>$sipmuser_PostId
            ]);
            $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
            return $fetchAds;
        }
        public function Viewget_SipmUSerAdsImg($simpUser_ImgId){
            $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
            $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
            return $fetchAds;
        }

        public function UpdateSimpUserAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion,
         $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber){
            $sql = "UPDATE sipmusersads SET simpUser_AdsTitle=:simpUser_AdsTitle, sipmUser_AdsPrice=:sipmUser_AdsPrice, sipmUser_AdsCategory=:sipmUser_AdsCategory,
             sipmUser_AdsType=:sipmUser_AdsType, sipmUser_AdsDescripion=:sipmUser_AdsDescripion, sipmUser_AdsNegotiation=:sipmUser_AdsNegotiation, sipmUser_AdsContactAddress=:sipmUser_AdsContactAddress, sipmUser_AdsContactEmail=:sipmUser_AdsContactEmail, sipmUser_AdsContactName=:sipmUser_AdsContactName, sipmUser_AdsContactNumber=:sipmUser_AdsContactNumber WHERE sipmuser_PostId=:sipmuser_PostId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'sipmuser_PostId'=>$sipmuser_PostId,
                'simpUser_AdsTitle'=>$simpUser_AdsTitle,
                'sipmUser_AdsPrice'=>$sipmUser_AdsPrice,
                'sipmUser_AdsCategory'=>$sipmUser_AdsCategory,
                'sipmUser_AdsType'=>$sipmUser_AdsType,
                'sipmUser_AdsDescripion'=>$sipmUser_AdsDescripion,
                'sipmUser_AdsNegotiation'=>$sipmUser_AdsNegotiation,
                'sipmUser_AdsContactAddress'=>$sipmUser_AdsContactAddress,
                'sipmUser_AdsContactEmail'=>$sipmUser_AdsContactEmail,
                'sipmUser_AdsContactName'=>$sipmUser_AdsContactName,
                'sipmUser_AdsContactNumber'=>$sipmUser_AdsContactNumber
            ]); 
            return true;
        }

        public function UpdateSimpUserAdsImg($simpUser_ImgId, $simpUser_AdsImg){
            $sql = "UPDATE sipmusersads_img SET simpUser_AdsImg=:simpUser_AdsImgUpadte WHERE simpUser_ImgId=:simpUser_ImgId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId,
                'simpUser_AdsImgUpadte'=>$simpUser_AdsImg
            ]);
            return true;
        }

        // pending ads
        public function getPendingAds($simp_Cid, $value){
            $sql ="SELECT * FROM sipmusersads WHERE (simp_Cid=:simp_Cid AND sipmUser_AdsVerified=0) AND sipmUser_AdsDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simp_Cid'=>$simp_Cid
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getPendingAdsImg($simpUser_ImgId, $value){
            $sql ="SELECT * FROM sipmusersads_img WHERE (simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified=0) AND sipmUser_AdsImgDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        //count total pending Ads
            public function countAdsStatus($simp_Cid, $value){
            $sql = "SELECT * FROM sipmusersads WHERE simp_Cid=:simp_Cid AND sipmUser_AdsVerified='$value'";
            $stmt =$this->conn->prepare($sql);
            $stmt->execute([
                'simp_Cid'=>$simp_Cid
            ]);
          $result=   $stmt->rowCount();
            return $result;
        }
            public function countAllUserAds($simp_Cid){
            $sql = "SELECT * FROM sipmusersads WHERE simp_Cid=:simp_Cid";
            $stmt =$this->conn->prepare($sql);
            $stmt->execute([
                'simp_Cid'=>$simp_Cid
            ]);
          $result=   $stmt->rowCount();
            return $result;
        }
            
            public function getVerifiedAds($simp_Cid, $value){
            $sql ="SELECT * FROM sipmusersads WHERE (simp_Cid=:simp_Cid AND sipmUser_AdsVerified=1) AND sipmUser_AdsDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simp_Cid'=>$simp_Cid
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
            public function getDisapprovedAds($simp_Cid, $value){
            $sql ="SELECT * FROM sipmusersads WHERE (simp_Cid=:simp_Cid AND sipmUser_AdsVerified=2) AND sipmUser_AdsDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simp_Cid'=>$simp_Cid
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getVerifiedAdsImg($simpUser_ImgId, $value){
            $sql ="SELECT * FROM sipmusersads_img WHERE (simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified=1) AND sipmUser_AdsImgDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getDisapproveAdsImg($simpUser_ImgId, $value){
            $sql ="SELECT * FROM sipmusersads_img WHERE (simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified=2) AND sipmUser_AdsImgDelete='$value'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'simpUser_ImgId'=>$simpUser_ImgId
            ]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function UpdateSimpUserDisAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion,
        $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $value){
           $sql = "UPDATE sipmusersads SET simpUser_AdsTitle=:simpUser_AdsTitle, sipmUser_AdsPrice=:sipmUser_AdsPrice, sipmUser_AdsCategory=:sipmUser_AdsCategory,
            sipmUser_AdsType=:sipmUser_AdsType, sipmUser_AdsDescripion=:sipmUser_AdsDescripion, sipmUser_AdsNegotiation=:sipmUser_AdsNegotiation, sipmUser_AdsContactAddress=:sipmUser_AdsContactAddress, sipmUser_AdsContactEmail=:sipmUser_AdsContactEmail, sipmUser_AdsContactName=:sipmUser_AdsContactName, sipmUser_AdsContactNumber=:sipmUser_AdsContactNumber WHERE sipmuser_PostId=:sipmuser_PostId AND sipmUser_AdsVerified='$value'";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute([
               'sipmuser_PostId'=>$sipmuser_PostId,
               'simpUser_AdsTitle'=>$simpUser_AdsTitle,
               'sipmUser_AdsPrice'=>$sipmUser_AdsPrice,
               'sipmUser_AdsCategory'=>$sipmUser_AdsCategory,
               'sipmUser_AdsType'=>$sipmUser_AdsType,
               'sipmUser_AdsDescripion'=>$sipmUser_AdsDescripion,
               'sipmUser_AdsNegotiation'=>$sipmUser_AdsNegotiation,
               'sipmUser_AdsContactAddress'=>$sipmUser_AdsContactAddress,
               'sipmUser_AdsContactEmail'=>$sipmUser_AdsContactEmail,
               'sipmUser_AdsContactName'=>$sipmUser_AdsContactName,
               'sipmUser_AdsContactNumber'=>$sipmUser_AdsContactNumber
           ]); 
           return true;
       }

       public function UpdateSimpUserDisAdsImg($simpUser_ImgId, $simpUser_AdsImg, $value){
        $sql = "UPDATE sipmusersads_img SET simpUser_AdsImg=:simpUser_AdsImgUpdate WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_ImgId'=>$simpUser_ImgId,
            'simpUser_AdsImgUpdate'=>$simpUser_AdsImg
        ]);
        return true;
       }

       public function Viewget_SipmUSerDisAds($sipmuser_PostId, $value){
        $sql = "SELECT * FROM sipmusersads WHERE sipmuser_PostId=:sipmuser_PostId AND sipmUser_AdsVerified='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmuser_PostId'=>$sipmuser_PostId
        ]);
        $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchAds;
    }
    public function Viewget_SipmUSerDisAdsImg($simpUser_ImgId, $value){
        $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_ImgId'=>$simpUser_ImgId
        ]);
        $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchAds;
    }


    public function UpdateSimpUserPendAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion,
    $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $value){
       $sql = "UPDATE sipmusersads SET simpUser_AdsTitle=:simpUser_AdsTitle, sipmUser_AdsPrice=:sipmUser_AdsPrice, sipmUser_AdsCategory=:sipmUser_AdsCategory,
        sipmUser_AdsType=:sipmUser_AdsType, sipmUser_AdsDescripion=:sipmUser_AdsDescripion, sipmUser_AdsNegotiation=:sipmUser_AdsNegotiation, sipmUser_AdsContactAddress=:sipmUser_AdsContactAddress, sipmUser_AdsContactEmail=:sipmUser_AdsContactEmail, sipmUser_AdsContactName=:sipmUser_AdsContactName, sipmUser_AdsContactNumber=:sipmUser_AdsContactNumber WHERE sipmuser_PostId=:sipmuser_PostId AND sipmUser_AdsVerified='$value'";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([
           'sipmuser_PostId'=>$sipmuser_PostId,
           'simpUser_AdsTitle'=>$simpUser_AdsTitle,
           'sipmUser_AdsPrice'=>$sipmUser_AdsPrice,
           'sipmUser_AdsCategory'=>$sipmUser_AdsCategory,
           'sipmUser_AdsType'=>$sipmUser_AdsType,
           'sipmUser_AdsDescripion'=>$sipmUser_AdsDescripion,
           'sipmUser_AdsNegotiation'=>$sipmUser_AdsNegotiation,
           'sipmUser_AdsContactAddress'=>$sipmUser_AdsContactAddress,
           'sipmUser_AdsContactEmail'=>$sipmUser_AdsContactEmail,
           'sipmUser_AdsContactName'=>$sipmUser_AdsContactName,
           'sipmUser_AdsContactNumber'=>$sipmUser_AdsContactNumber
       ]); 
       return true;
   }

   public function UpdateSimpUserPendAdsImg($simpUser_ImgId, $simpUser_AdsImg, $value){
    $sql = "UPDATE sipmusersads_img SET simpUser_AdsImg=:simpUser_AdsImgUpdates WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified='$value'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'simpUser_ImgId'=>$simpUser_ImgId,
        'simpUser_AdsImgUpdates'=>$simpUser_AdsImg
    ]);
    return true;
   }

   public function Viewget_SipmUSerVerifyAds($sipmuser_PostId, $value){
    $sql = "SELECT * FROM sipmusersads WHERE sipmuser_PostId=:sipmuser_PostId AND sipmUser_AdsVerified='$value'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'sipmuser_PostId'=>$sipmuser_PostId
    ]);
    $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetchAds;
}
public function Viewget_SipmUSerAdsVerifyImg($simpUser_ImgId, $value){
    $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified='$value'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'simpUser_ImgId'=>$simpUser_ImgId
    ]);
    $fetchAds = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetchAds;
}

public function deleteSimpUserAccount($value, $id){
    $sql = "UPDATE  sipmusers SET simpUser_AccDelete='$value' WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'id'=>$id
    ]);
    return true;
}
}
// sipmusersads
// sipmusersads_img
// simp_Cid

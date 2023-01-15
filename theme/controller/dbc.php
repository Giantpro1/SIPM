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
     public function simpUser_UploadingAdsImg($simp_Cid, $simpUser_ImgId, $simpUser_AdsImg, $simpUser_ImgName){
        $sql = "INSERT INTO sipmusersads_img (simp_Cid, simpUser_ImgId, simpUser_AdsImg, simpUser_ImgName) VALUES (:simp_Cid, :simpUser_ImgId, :simpUser_AdsImg, :simpUser_ImgName)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_Cid'=>$simp_Cid,
            'simpUser_ImgId'=>$simpUser_ImgId,
            'simpUser_AdsImg'=>$simpUser_AdsImg,
            'simpUser_ImgName'=>$simpUser_ImgName
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


// public function fetchTrendingAds($value){
//     $sql = "SELECT * FROM (sipmusersads JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId) WHERE
//      (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') ORDER BY sipmusersads.sipmuser_PostId DESC";
//     $stmt = $this->conn->prepare($sql);
//     $stmt->execute();
//     $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $row;
// }
public function fetchTrendingAds($value){
    $sql = "SELECT DISTINCT SQL_CALC_FOUND_ROWS * FROM sipmusersads LEFT JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId WHERE sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}
// * FROM (sipmusersads JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId) WHERE
//      (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') ORDER BY sipmusersads.sipmuser_PostId DESC
    public function productSearch($request, $productCat, $productLoction, $value){
        $sql = "SELECT * FROM sipmusersads INNER JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId WHERE (simpUser_AdsTitle LIKE '%$request%' AND simpUser_ImgName LIKE '%$request%') AND (sipmUser_AdsCategory LIKE '%$productCat%' OR sipmUser_AdsContactAddress LIKE '%$productLoction%') AND (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') LIMIT 5";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function viewSinglePPP($id){
        $sql = "SELECT unique_id, sipmUser_FirstName, sipmUser_SecondName, simp_UserName, sipmUser_ProfileImg, simpUserReg_Date FROM sipmusers WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewSinglePPD($simp_Cid){
        $sql = "SELECT * FROM sipmusersads WHERE sipmuser_PostId=:sipmuser_PostId";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'sipmuser_PostId'=>$simp_Cid
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewSinglePPI($simp_Cid){
        $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_ImgId'=>$simp_Cid
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewAllUSerInfo($id, $value){
        $sql = "SELECT sipmUser_FirstName, sipmUser_SecondName, simp_UserName, sipmUser_ProfileImg, simpUserReg_Date FROM sipmusers WHERE id=:id AND sipmUser_Verify= '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id'=>$id
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewAllUserAdsD($simp_Cid, $value){
        $sql = "SELECT * FROM sipmusersads WHERE simp_Cid=:simp_Cid AND sipmUser_AdsVerified= '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simp_Cid'=>$simp_Cid
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewAllUserAdsImg($simp_Cid, $value){
        $sql = "SELECT * FROM sipmusersads_img WHERE simpUser_ImgId=:simpUser_ImgId AND sipmUser_AdsImgVerified= '$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'simpUser_ImgId'=>$simp_Cid
        ]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function insertChat($incoming_id, $unique_id, $message){
        $sql =  "INSERT INTO sipm_message (incomingMessId, outGoingMessId, sipmUser_Mess) VALUES ('$incoming_id', '$unique_id', '$message')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return true;
    }
    public function getChat($incoming_id, $unique_id){
        $sql = "SELECT * FROM sipm_message LEFT JOIN sipmusers ON sipmusers.unique_id = sipm_message.outGoingMessId
        WHERE (outGoingMessId = '$unique_id' AND incomingMessId = '$incoming_id')
        OR (outGoingMessId = '$incoming_id' AND incomingMessId = '$unique_id') ORDER BY id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function catProduct($catRequest, $value){
        $sql = "SELECT * FROM sipmusersads LEFT JOIN sipmusersads_img ON sipmuser_PostId=simpUser_ImgId WHERE sipmUser_AdsCategory LIKE '%$catRequest%' AND (sipmUser_AdsVerified='$value' AND sipmUser_AdsImgVerified='$value') LIMIT 5";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }   
}
// sipmusersads
// sipmusersads_img
// simp_Cid

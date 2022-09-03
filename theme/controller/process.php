<?php
require 'session.php';

if(isset($_FILES['sipmUser_ProfileImg'])){
    $sipmUser_FirstName =$sipmCur_User->test_input($_POST['sipmUser_FirstName']);
    $sipmUser_SecondName =$sipmCur_User->test_input($_POST['sipmUser_SecondName']);
    $sipmUser_CommunityName =$sipmCur_User->test_input($_POST['sipmUser_CommunityName']);
    $sipmUser_HidePro =$sipmCur_User->test_input($_POST['sipmUser_HidePro']);
    $simpUser_ZipCode =$sipmCur_User->test_input($_POST['simpUser_ZipCode']);
    
    $imgFolder = '../images/uploadImg/';


    if(isset($_FILES['sipmUser_ProfileImg']) && ($_FILES['sipmUser_ProfileImg'] != '' )){
        $simpUSer_Pro = $imgFolder.time().'_'.$_FILES['sipmUser_ProfileImg']['name'];
        move_uploaded_file($_FILES['sipmUser_ProfileImg']['tmp_name'], $simpUSer_Pro);

        $sipmCur_User->simpUsers_UpdateProfile($sipmUser_FirstName, $sipmUser_SecondName, $sipmUser_CommunityName, $sipmUser_HidePro, $simpUser_ZipCode, $simpUSer_Pro, $simp_Cid);
    }

}


if(isset($_POST['simpUser_AdsTitle'])){
    $sipmuser_PostId =$sipmCur_User->test_input($_POST['sipmuser_PostId']);
    $simpUser_AdsTitle =$sipmCur_User->test_input($_POST['simpUser_AdsTitle']);
    $sipmUser_AdsType =$sipmCur_User->test_input($_POST['sipmUser_AdsType']);
    $sipmUser_AdsDescripion =$sipmCur_User->test_input($_POST['sipmUser_AdsDescripion']);
    $sipmUser_AdsCategory =$sipmCur_User->test_input($_POST['sipmUser_AdsCategory']);
    $sipmUser_AdsPrice =$sipmCur_User->test_input($_POST['sipmUser_AdsPrice']);
    $sipmUser_AdsNegotiation =$sipmCur_User->test_input($_POST['sipmUser_AdsNegotiation']);
    $sipmUser_AdsContactName =$sipmCur_User->test_input($_POST['sipmUser_AdsContactName']);
    $sipmUser_AdsContactNumber =$sipmCur_User->test_input($_POST['sipmUser_AdsContactNumber']);
    $sipmUser_AdsContactEmail =$sipmCur_User->test_input($_POST['sipmUser_AdsContactEmail']);
    $sipmUser_AdsContactAddress =$sipmCur_User->test_input($_POST['sipmUser_AdsContactAddress']);

    $result = $sipmCur_User->simpUser_UploadingAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsCategory, $sipmUser_AdsPrice, $sipmUser_AdsNegotiation, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $sipmUser_AdsContactEmail, $sipmUser_AdsContactAddress);
    
}

if(isset($_FILES['simpUser_AdsImg'])){
    if (isset($_FILES['simpUser_AdsImg']) && ($_FILES['simpUser_AdsImg'] != '')){
        
        $simpUser_ImgId = $sipmCur_User->test_input($_POST['simpUser_ImgId']);
        $simpUser_AdsImg = $_FILES['simpUser_AdsImg']['name'];

        foreach ($simpUser_AdsImg as $i => $value) {
            $GTR = time(). '_' . rand(2000,100000). '_'.$simpUser_AdsImg[$i];
            $folderForAdsImg = '../images/adsImages/';
            $faiPath = $folderForAdsImg.$GTR;
            $PathName = $_FILES['simpUser_AdsImg']['tmp_name'][$i];
            move_uploaded_file($PathName,$faiPath);

            
            $imgResult = $sipmCur_User->simpUser_UploadingAdsImg( $simpUser_ImgId, $GTR);
        }
    }
}

// change password 

    if(isset($_POST['action']) && ($_POST['action'] === 'change_Pass')){
        $profilePassword = $sipmCur_User->test_input($_POST['profilePassword']);
        $newSimpUser_Pass = $sipmCur_User->test_input($_POST['newSimpUser_Pass']);
        $conNewSimp_Pass = $sipmCur_User->test_input($_POST['conNewSimp_Pass']);

        $h_Pass = password_hash($newSimpUser_Pass, PASSWORD_DEFAULT);
         
        if($newSimpUser_Pass != $conNewSimp_Pass){
            echo "password did not match";
        }else{
            $uppercase = preg_match('@[A-Z]@', $newSimpUser_Pass);
                    $lowercase = preg_match('@[a-z]@', $newSimpUser_Pass);
                    $number = preg_match('@[0-9]@', $newSimpUser_Pass);
                    $specialChars = preg_match('@[^\W]@', $newSimpUser_Pass);
                    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newSimpUser_Pass) < 8 ){
                        echo "password must consist of lowercase, uppercase, special characters and must be 8 characters long";
                    }else{
                        if(password_verify($profilePassword, $simpUserPass)){
                            $sipmCur_User->sipmUser_Password($h_Pass, $simp_Cid);
                            echo "password change successfully";
                        }else{
                            echo "current passeword is not correct";
                        }
                    }
        }

   
    }
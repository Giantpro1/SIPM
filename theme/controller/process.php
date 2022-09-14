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



if(isset($_FILES['simpUser_AdsImg'])){
    $sipmuser_PostId = rand(100,10000).'_'.time().'?';
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
        if(!empty($simpUser_AdsTitle) && !empty($sipmUser_AdsType) && !empty($sipmUser_AdsDescripion) && !empty($sipmUser_AdsCategory) && !empty($sipmUser_AdsPrice) && !empty($sipmUser_AdsNegotiation) && !empty($sipmUser_AdsContactName) && !empty($sipmUser_AdsContactNumber) && !empty($sipmUser_AdsContactEmail) && !empty($sipmUser_AdsContactAddress)){
            $resultDetails = $sipmCur_User->simpUser_UploadingAds($simp_Cid, $sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsCategory, $sipmUser_AdsPrice, $sipmUser_AdsNegotiation, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $sipmUser_AdsContactEmail, $sipmUser_AdsContactAddress);
                if($resultDetails){
                    echo "product upload successfully";
                    $_SESSION['userPostId'] = $sipmuser_PostId;
                }
        }else{
            echo "some fields are empty!"; 
        }
    
    if (isset($_FILES['simpUser_AdsImg']) && ($_FILES['simpUser_AdsImg'] != '')){
        
        $simpUser_AdsImg = $_FILES['simpUser_AdsImg']['name'];
            if(!empty($simpUser_AdsImg)){
                foreach ($simpUser_AdsImg as $i => $value){
                    $GTR = time(). '_' . rand(2000,100000). '_'.$simpUser_AdsImg[$i];
                    $folderForAdsImg = '../images/adsImages/';
                    $faiPath = $folderForAdsImg.$GTR;
                    $PathName = $_FILES['simpUser_AdsImg']['tmp_name'][$i];
                    move_uploaded_file($PathName,$faiPath);
                    $imgResult = $sipmCur_User->simpUser_UploadingAdsImg($simp_Cid, $sipmuser_PostId, $GTR);
                }
            }else{
                echo "Image fields cannot be empty!";
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
        }elseif(empty($profilePassword) && empty($newSimpUser_Pass) && empty($conNewSimp_Pass)){
            echo"some fields are empty";
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

    if(isset($_POST['action']) && ($_POST['action'] === 'chang_Email')){
        $simp_UserCurEmail =$sipmCur_User->test_input($_POST['simp_UserCurEmail']);
        $simp_UserNewEmail = $sipmCur_User->test_input($_POST['simp_UserNewEmail']);
            if(empty($simp_UserCurEmail) && empty($simp_UserNewEmail)){
                echo "some fields are empty!";
            }elseif($sipmCur_User->user_exitsEmail($simp_UserCurEmail)){
                $sipmCur_User->sipmUser_ChangeEmail($simp_UserNewEmail, $simp_Cid);
                echo "Email change successFully";
            }else{
                echo "current email is not correct";
            }
 
           
    }
    if(isset($_POST['action']) && $_POST['action'] === 'dispayAds'){
        $simpUserAds = $sipmCur_User->get_SipmUSerAds($simp_Cid);
        $output = '';
        if($simpUserAds){
            $output .= '';
            foreach($simpUserAds as $simpUserAd){
                $simpUSerAdsImg = $sipmCur_User->get_SipmUSerAdsImg($simpUserAd['sipmuser_PostId']);
                if($simpUSerAdsImg){
                    foreach($simpUSerAdsImg as $simpUSerAdsImgs){
                        $img='<img width="80px" height="auto" src="'.'../images/adsImages/'.$simpUSerAdsImgs['simpUser_AdsImg'].'" alt="image description">';
                    }
                    // echo $output;
                }
                $output .= '
                <tr>
                <td class="product-thumb">
                    '.$img.'</td>
                <td class="product-details">
                    <h3 class="title">'.$simpUserAd['simpUser_AdsTitle'].'</h3>
                    <span class="add-id"><strong>Ad ID:</strong>ng3D5hAMHPajQrM</span>
                    <span><strong>Posted on: </strong><time>'.date('F d, Y', strtotime($simpUserAd['simpUser_AdsDate'])).'</time> </span>
                    <span class="status active"><strong>Status</strong>Active</span>
                    <span class="location"><strong>Location</strong>'.substr($simpUserAd['sipmUser_AdsContactAddress'],0,18).'</span>
                </td>
                <td class="product-category"><span class="categories">'.$simpUserAd['sipmUser_AdsCategory'].'</span></td>
                <td class="action" data-title="Action">
                    <div class="">
                    <ul class="list-inline justify-content-center">
                        <li class="list-inline-item">
                        <a data-toggle="modal" data-placement="top" title="view" data-target="#viewSimpUser_Ad"  id="'.$simpUserAd['sipmuser_PostId'].'" class=" view viewSimpUserAd" >
                            <i class="fa fa-eye"></i>
                        </a>
                        </li> 
                        <li class="list-inline-item">
                        <a class="edit editSimpUSerAd" data-toggle="modal" data-target="#editSimpUser_Ad" data-placement="top" id="'.$simpUserAd['sipmuser_PostId'].'" title="EditBtn" href="dashboard">
                            <i class="fa fa-pencil"></i>
                        </a>
                        </li>
                        <li class="list-inline-item">
                        <a class="delete deleteSimpUserAd" data-toggle="" data-target="#" data-placement="top" id="'.$simpUserAd['sipmuser_PostId'].'" title="DeleteBtn" href="dashboard">
                            <i class="fa fa-trash"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </td>
                </tr>';
            }
            echo $output;
        }else{
            echo "You haven't upload any ads";
        }
    }
    // delete ads
    if(isset($_POST['deleteAds'])){
        $sipmuser_PostId =$_POST['deleteAds'];
        $deleteSipmUserAds = $sipmCur_User->deleteSimpUserAds($sipmuser_PostId);
        if($deleteSipmUserAds){
            $deleteSipmUserAdImg =$sipmCur_User->deleteSimpUserAdImg($simpUser_ImgId['sipmuser_PostId']);
        }
    }

    // view ads

    if(isset($_POST['viewSimpAds'])){
        $simp_Cid = $_POST['viewSimpAds'];
        $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerAds($simp_Cid);
        echo json_encode($viewSimpUserAds);
    }
            // if($viewSimpUserAds){

        // }

    // if(isset($_POST['viewSimpAds'])){
    //     $simp_Cid = $_POST['viewSimpAds'];
    //         $viewSimpUserAdimg = $sipmCur_User->Viewget_SipmUSerAdsImg($simp_Cid['sipmuser_PostId']);
    //         echo $viewSimpUserAdimg;
    // }

    //edit ads
    if(isset($_POST['editSimpAds'])){
        $simp_Cid = $_POST['editSimpAds'];
        $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerAds($simp_Cid);
        echo json_encode($viewSimpUserAds);
    }
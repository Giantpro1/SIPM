<?php
require ('session.php');

// update user profile
if (isset($_FILES['sipmUser_ProfileImg'])) {
    $sipmUser_FirstName = $sipmCur_User->test_input($_POST['sipmUser_FirstName']);
    $sipmUser_SecondName = $sipmCur_User->test_input($_POST['sipmUser_SecondName']);
    $sipmUser_CommunityName = $sipmCur_User->test_input($_POST['sipmUser_CommunityName']);
    $sipmUser_HidePro = $sipmCur_User->test_input($_POST['sipmUser_HidePro']);
    $simpUser_ZipCode = $sipmCur_User->test_input($_POST['simpUser_ZipCode']);

    $imgFolder = '../images/uploadImg/';


    if (isset($_FILES['sipmUser_ProfileImg']) && ($_FILES['sipmUser_ProfileImg'] != '')) {
        $simpUSer_Pro = $imgFolder . time() . '_' . $_FILES['sipmUser_ProfileImg']['name'];
        move_uploaded_file($_FILES['sipmUser_ProfileImg']['tmp_name'], $simpUSer_Pro);

        $sipmCur_User->simpUsers_UpdateProfile($sipmUser_FirstName, $sipmUser_SecondName, $sipmUser_CommunityName, $sipmUser_HidePro, $simpUser_ZipCode, $simpUSer_Pro, $simp_Cid);
    }
}

// upload ads

if (isset($_FILES['simpUser_AdsImg'])) {
    $sipmuser_PostId = rand(100, 10000) . '_' . time() . '?';
    $simpUser_AdsTitle = $sipmCur_User->test_input($_POST['simpUser_AdsTitle']);
    $sipmUser_AdsType = $sipmCur_User->test_input($_POST['sipmUser_AdsType']);
    $sipmUser_AdsDescripion = $sipmCur_User->test_input($_POST['sipmUser_AdsDescripion']);
    $sipmUser_AdsCategory = $sipmCur_User->test_input($_POST['sipmUser_AdsCategory']);
    $sipmUser_AdsPrice = $sipmCur_User->test_input($_POST['sipmUser_AdsPrice']);
    $sipmUser_AdsNegotiation = $sipmCur_User->test_input($_POST['sipmUser_AdsNegotiation']);
    $sipmUser_AdsContactName = $sipmCur_User->test_input($_POST['sipmUser_AdsContactName']);
    $sipmUser_AdsContactNumber = $sipmCur_User->test_input($_POST['sipmUser_AdsContactNumber']);
    $sipmUser_AdsContactEmail = $sipmCur_User->test_input($_POST['sipmUser_AdsContactEmail']);
    $sipmUser_AdsContactAddress = $sipmCur_User->test_input($_POST['sipmUser_AdsContactAddress']);
    if (!empty($simpUser_AdsTitle) && !empty($sipmUser_AdsType) && !empty($sipmUser_AdsDescripion) && !empty($sipmUser_AdsCategory) && !empty($sipmUser_AdsPrice) && !empty($sipmUser_AdsNegotiation) && !empty($sipmUser_AdsContactName) && !empty($sipmUser_AdsContactNumber) && !empty($sipmUser_AdsContactEmail) && !empty($sipmUser_AdsContactAddress)) {
        $resultDetails = $sipmCur_User->simpUser_UploadingAds($simp_Cid, $sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsCategory, $sipmUser_AdsPrice, $sipmUser_AdsNegotiation, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, $sipmUser_AdsContactEmail, $sipmUser_AdsContactAddress);
        if ($resultDetails) {
            echo "product upload successfully";
            $_SESSION['sipmuser_PostId'] = $sipmuser_PostId;
        }
    } else {
        echo "some fields are empty!";
    }

    if (isset($_FILES['simpUser_AdsImg']) && ($_FILES['simpUser_AdsImg'] != '')) {

        $simpUser_AdsImg = $_FILES['simpUser_AdsImg']['name'];
        if (!empty($simpUser_AdsImg)) {
            foreach ($simpUser_AdsImg as $i => $value) {
                $GTR = time() . '_' . rand(2000, 100000) . '_' . $simpUser_AdsImg[$i];
                $folderForAdsImg = '../images/adsImages/';
                $faiPath = $folderForAdsImg . $GTR;
                $PathName = $_FILES['simpUser_AdsImg']['tmp_name'][$i];
                move_uploaded_file($PathName, $faiPath);
                $imgResult = $sipmCur_User->simpUser_UploadingAdsImg($simp_Cid, $sipmuser_PostId, $GTR, $simpUser_AdsTitle);
            }
        } else {
            echo "Image fields cannot be empty!";
        }
    }
}

// change password 

if (isset($_POST['action']) && ($_POST['action'] === 'change_Pass')) {
    $profilePassword = $sipmCur_User->test_input($_POST['profilePassword']);
    $newSimpUser_Pass = $sipmCur_User->test_input($_POST['newSimpUser_Pass']);
    $conNewSimp_Pass = $sipmCur_User->test_input($_POST['conNewSimp_Pass']);

    $h_Pass = password_hash($newSimpUser_Pass, PASSWORD_DEFAULT);

    if ($newSimpUser_Pass != $conNewSimp_Pass) {
        echo "password did not match";
    } elseif (empty($profilePassword) && empty($newSimpUser_Pass) && empty($conNewSimp_Pass)) {
        echo "some fields are empty";
    } else {
        $uppercase = preg_match('@[A-Z]@', $newSimpUser_Pass);
        $lowercase = preg_match('@[a-z]@', $newSimpUser_Pass);
        $number = preg_match('@[0-9]@', $newSimpUser_Pass);
        $specialChars = preg_match('@[^\W]@', $newSimpUser_Pass);
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newSimpUser_Pass) < 8) {
            echo "password must consist of lowercase, uppercase, special characters and must be 8 characters long";
        } else {
            if (password_verify($profilePassword, $simpUserPass)) {
                $sipmCur_User->sipmUser_Password($h_Pass, $simp_Cid);
                echo "password change successfully";
            } else {
                echo "current passeword is not correct";
            }
        }
    }
}
// change email
if (isset($_POST['action']) && ($_POST['action'] === 'chang_Email')) {
    $simp_UserCurEmail = $sipmCur_User->test_input($_POST['simp_UserCurEmail']);
    $simp_UserNewEmail = $sipmCur_User->test_input($_POST['simp_UserNewEmail']);
    if (empty($simp_UserCurEmail) && empty($simp_UserNewEmail)) {
        echo "some fields are empty!";
    } elseif ($sipmCur_User->user_exitsEmail($simp_UserCurEmail)) {
        $sipmCur_User->sipmUser_ChangeEmail($simp_UserNewEmail, $simp_Cid);
        echo "Email change successFully";
    } else {
        echo "current email is not correct";
    }
}

// fetch all ads

if (isset($_POST['action']) && $_POST['action'] === 'dispayAds') {
    $simpUserAds = $sipmCur_User->get_SipmUSerAds($simp_Cid, 0);
    $output = '';
    if ($simpUserAds) {
        $output = '';
        $img = '';
        foreach ($simpUserAds as $simpUserAd) {
            $simpUSerAdsImg = $sipmCur_User->get_SipmUSerAdsImg($simpUserAd['sipmuser_PostId'], 0);
            if ($simpUSerAdsImg) {
                foreach ($simpUSerAdsImg as $simpUSerAdsImgs) {
                    $img = '
                    <img width="80px" height="auto" src="' . '../images/adsImages/' . $simpUSerAdsImgs['simpUser_AdsImg'] . '" alt="image description">
                    ';
                }
                // echo $output;
            }
            $output .= '
                <tr>
                <td class="product-thumb">
                    '.$img.'</td>
                <td class="product-details">
                    <h3 class="title">' . $simpUserAd['simpUser_AdsTitle'] . '</h3>
                    <span class="add-id"><strong>Ads Product Price:</strong>' . $simpUserAd['sipmUser_AdsPrice'] . '</span>
                    <span><strong>Posted on: </strong><time>' . date('F d, Y', strtotime($simpUserAd['simpUser_AdsDate'])) . '</time> </span>
                    <span class="status active"><strong>Status</strong>Active</span>
                    <span class="location"><strong>Location</strong>' . substr($simpUserAd['sipmUser_AdsContactAddress'], 0, 18) . '</span>
                </td>
                <td class="product-category"><span class="categories">' . $simpUserAd['sipmUser_AdsCategory'] . '</span></td>
                <td class="action" data-title="Action">
                    <div class="">
                    <ul class="list-inline justify-content-center">
                        <li class="list-inline-item">
                        <a data-toggle="modal" data-placement="top" title="view" data-target="#viewSimpUser_Ad"  id="' . $simpUserAd['sipmuser_PostId'] . '" class=" view viewSimpUserAd" >
                            <i class="fa fa-eye"></i>
                        </a>
                        </li> 
                        <li class="list-inline-item">
                        <a  data-toggle="modal" data-target="#editSimpUser_Ad" class="edit editSimpUSerAd" data-placement="top" id="' . $simpUserAd['sipmuser_PostId'] . '" title="EditBtn" href="">
                            <i class="fa fa-pencil"></i>
                        </a>
                        </li>
                        <li class="list-inline-item">
                        <a class="delete deleteSimpUserAd" data-toggle="" data-target="#" data-placement="top" id="' . $simpUserAd['sipmuser_PostId'] . '" title="DeleteBtn" href="">
                            <i class="fa fa-trash"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </td>
                </tr>';
        }
        echo $output;
    } else {
        echo "You haven't upload any ads";
    }
}
// delete ads
if (isset($_POST['deleteAds'])) {
    $sipmuser_PostId = $_POST['deleteAds'];
    $deleteSipmUserAds = $sipmCur_User->deleteSimpUserAds(1, $sipmuser_PostId);
    if ($deleteSipmUserAds) {
        $simpUser_ImgId = $_POST['deleteAds'];
        $deleteSipmUserAdImg = $sipmCur_User->deleteSimpUserAdImg(1, $simpUser_ImgId);
    }
}

// view ads

if (isset($_POST['viewSimpAds'])) {
    $simp_Cid = $_POST['viewSimpAds'];
    $sipmuser_PostId = $_POST['viewSimpAds'];
    $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerAds($simp_Cid);
    $viewSimpUserAdimg = $sipmCur_User->Viewget_SipmUSerAdsImg($sipmuser_PostId);

    $result = array_merge($viewSimpUserAds, $viewSimpUserAdimg);
    echo json_encode($result);
}

//edit ads values grab
if (isset($_POST['editSimpAds'])) {
    $simp_Cid = $_POST['editSimpAds'];
    $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerAds($simp_Cid);
    echo json_encode($viewSimpUserAds);
}

// update ads

if (isset($_FILES['simpUser_AdsImgUpadte'])) {
    $sipmuser_PostId = $sipmCur_User->test_input($_POST['sipmuser_PostId']);
    $simpUser_AdsTitle = $sipmCur_User->test_input($_POST['simpUser_AdsTitle']);
    $sipmUser_AdsDescripion = $sipmCur_User->test_input($_POST['sipmUser_AdsDescripion']);
    $sipmUser_AdsCategory = $sipmCur_User->test_input($_POST['sipmUser_AdsCategory']);
    $sipmUser_AdsType = $sipmCur_User->test_input($_POST['sipmUser_AdsType']);
    $sipmUser_AdsPrice = $sipmCur_User->test_input($_POST['sipmUser_AdsPrice']);
    $sipmUser_AdsNegotiation = $sipmCur_User->test_input($_POST['sipmUser_AdsNegotiation']);
    $sipmUser_AdsContactName = $sipmCur_User->test_input($_POST['sipmUser_AdsContactName']);
    $sipmUser_AdsContactNumber = $sipmCur_User->test_input($_POST['sipmUser_AdsContactNumber']);
    $sipmUser_AdsContactEmail = $sipmCur_User->test_input($_POST['sipmUser_AdsContactEmail']);
    $sipmUser_AdsContactAddress = $sipmCur_User->test_input($_POST['sipmUser_AdsContactAddress']);

    $sipmCur_User->UpdateSimpUserAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber);

    if (isset($_FILES['simpUser_AdsImgUpadte']) && ($_FILES['simpUser_AdsImgUpadte'])) {

        $simpUser_AdsImg = $_FILES['simpUser_AdsImgUpadte']['name'];
        foreach ($simpUser_AdsImg as $i => $value) {
            $GTR = time() . '_' . rand(2000, 100000) . '_' . $simpUser_AdsImg[$i];
            $folderForAdsImg = '../images/adsImages/';
            $faiPath = $folderForAdsImg . $GTR;
            $PathName = $_FILES['simpUser_AdsImgUpadte']['tmp_name'][$i];
            move_uploaded_file($PathName, $faiPath);
            $imgResult = $sipmCur_User->UpdateSimpUserAdsImg($sipmuser_PostId, $GTR);
        }
    }
}

// pending ads

if (isset($_POST['action']) && $_POST['action'] === 'displayPendAds') {
    $simpUserPendingAds = $sipmCur_User->getPendingAds($simp_Cid, 0);
    $output = '';
    if ($simpUserPendingAds) {
        $output .= '';
        foreach ($simpUserPendingAds as $simpUserPendingAd) {
            $simpUserPendingAdsImg = $sipmCur_User->getPendingAdsImg($simpUserPendingAd['sipmuser_PostId'], 0);
            if ($simpUserPendingAdsImg) {
                foreach ($simpUserPendingAdsImg as $simpUserPendingAdImg) {
                    $img = '<img width="80px" height="auto" src="' . '../images/adsImages/' . $simpUserPendingAdImg['simpUser_AdsImg'] . '" alt="image description">';
                }
            }
            $output .= '
                <tr>
								<td class="product-thumb">
									' . $img . '</td>
								<td class="product-details">
									<h3 class="title">' . $simpUserPendingAd['simpUser_AdsTitle'] . '</h3>
									<span class="add-id"><strong>Ads Product Price:</strong> ' . $simpUserPendingAd['sipmUser_AdsPrice'] . '</span>
									<span><strong>Posted on: </strong><time>' . date('F d, Y', strtotime($simpUserPendingAd['simpUser_AdsDate'])) . '</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>' . substr($simpUserPendingAd['sipmUser_AdsContactAddress'], 0, 18) . '</span>
								</td>
								<td class="product-category"><span class="categories">' . $simpUserPendingAd['sipmUser_AdsCategory'] . '</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="modal" data-placement="top" title="Edit" data-target="#editSimpUserPend_Ad" class="edit editSimpUSerPendAd" id="' . $simpUserPendingAd['sipmuser_PostId'] . '" href="dashboard-pending-ads">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Delete" class="delete deleteSimpUserPendAd" id="' . $simpUserPendingAd['sipmuser_PostId'] . '" href="dashboard-pending-ads">
													<i class="fa fa-trash"></i>
												</a>
											</li> 
										</ul>
									</div>
								</td>
							</tr>
							<tr>';
        }
        echo $output;
    } else {
        echo "All your have been verified!";
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'CountPendingAds') {
    $CountPend = $sipmCur_User->countAdsStatus($simp_Cid, 0);
    echo $CountPend;
}

// display vefified ads

if (isset($_POST['action']) && $_POST['action'] === 'dispayVerifiedAds') {
    $getVerifyAds = $sipmCur_User->getVerifiedAds($simp_Cid, 0);
    $output = '';
    if ($getVerifyAds) {
        foreach ($getVerifyAds as $getVerifyAd) {
            $getVerifyAdsImg = $sipmCur_User->getVerifiedAdsImg($getVerifyAd['sipmuser_PostId'], 0);
            if ($getVerifyAdsImg) {
                foreach ($getVerifyAdsImg as $getVerifyAdImg) {
                    $img = '<img width="80px" height="auto" src="' . '../images/adsImages/' . $getVerifyAdImg['simpUser_AdsImg'] . '" alt="image description"></td>';
                }
            }
            $output .= '
            <tr>
            <td class="product-thumb">
                ' . $img . '
            <td class="product-details">
                <h3 class="title">' . $getVerifyAd['simpUser_AdsTitle'] . '</h3>
                <span class="add-id"><strong>Ads Product Price:</strong>' . $getVerifyAd['sipmUser_AdsPrice'] . '</span>
                <span><strong>Posted on: </strong><time>' . date('F d, Y', strtotime($getVerifyAd['simpUser_AdsDate'])) . '</time> </span>
                <span class="status active"><strong>Status</strong>Active</span>
                <span class="location"><strong>Location</strong>' . substr($getVerifyAd['sipmUser_AdsContactAddress'], 0, 18) . '</span>
            </td>
            <td class="product-category"><span class="categories">' . $getVerifyAd['sipmUser_AdsCategory'] . '</span></td>
            <td class="action" data-title="Action">
                <div class="">
                    <ul class="list-inline justify-content-center">
                        <li class="list-inline-item">
                            <a data-toggle="modal" data-placement="top" data-target="#viewVerifyModal" id="' . $getVerifyAd['sipmuser_PostId'] . '" title="View" class="view viewSimpUserVerifyAd" href="">
                                <i class="fa fa-eye"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a data-toggle="tooltip" data-placement="top" id="' . $getVerifyAd['sipmuser_PostId'] . '" title="Delete" class="delete deleteSimpUserVerifyAd" href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>';
        }
        echo $output;
    } else {
        echo "Non Of your Ads are verified Yet!";
    }
}

// count verify ads
if (isset($_POST['action']) && $_POST['action'] === 'CountVerifyAds') {
    $CountVerify = $sipmCur_User->countAdsStatus($simp_Cid, 1);
    echo $CountVerify;
}

// fetch disapprove ads
if (isset($_POST['action']) && $_POST['action'] === 'dispayDis') {
    $getDisapproveAds = $sipmCur_User->getDisapprovedAds($simp_Cid, 0);
    $output = '';
    if ($getDisapproveAds) {
        foreach ($getDisapproveAds as $getDisaprrovedAd) {
            $getDisaprrovedAdsImg = $sipmCur_User->getDisapproveAdsImg($getDisaprrovedAd['sipmuser_PostId'], 0);
            if ($getDisaprrovedAdsImg) {
                foreach ($getDisaprrovedAdsImg as $getDisaprrovedAdImg) {
                    $img = '<img width="80px" height="auto" src="' . '../images/adsImages/' . $getDisaprrovedAdImg['simpUser_AdsImg'] . '" alt="image description"></td>';
                }
            }
            $output .= '
            <tr>
            <td class="product-thumb">
                ' . $img . '
            <td class="product-details">
                <h3 class="title">' . $getDisaprrovedAd['simpUser_AdsTitle'] . '</h3>
                <span class="add-id"><strong>Ads Product Price:</strong>' . $getDisaprrovedAd['sipmUser_AdsPrice'] . '</span>
                <span><strong>Posted on: </strong><time>' . date('F d, Y', strtotime($getDisaprrovedAd['simpUser_AdsDate'])) . '</time> </span>
                <span class="status active"><strong>Status</strong>Active</span>
                <span class="location"><strong>Location</strong>' . substr($getDisaprrovedAd['sipmUser_AdsContactAddress'], 0, 18) . '</span>
            </td>
            <td class="product-category"><span class="categories">' . $getDisaprrovedAd['sipmUser_AdsCategory'] . '</span></td>
            <td class="action" data-title="Action">
                <div class="">
                    <ul class="list-inline justify-content-center">
                        <li class="list-inline-item">
                            <a data-toggle="modal" data-target="#editSimpUser_DisAd" data-placement="top" id="' . $getDisaprrovedAd['sipmuser_PostId'] . '" title="edit" class="view editDisAds" href="">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a data-toggle="tooltip"  data-placement="top" id="' . $getDisaprrovedAd['sipmuser_PostId'] . '" title="Delete" class="delete deleteSimpUserDisapprovedAd" href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>';
        }
        echo $output;
    } else {
        echo "Non Of your Ads are disapprove Yet!";
    }
}

// update disapprove ads

if (isset($_FILES['simpUser_AdsImgUpdate'])) {
    $sipmuser_PostId = $sipmCur_User->test_input($_POST['sipmuser_PostId']);
    $simpUser_AdsTitle = $sipmCur_User->test_input($_POST['simpUser_AdsTitle']);
    $sipmUser_AdsDescripion = $sipmCur_User->test_input($_POST['sipmUser_AdsDescripion']);
    $sipmUser_AdsCategory = $sipmCur_User->test_input($_POST['sipmUser_AdsCategory']);
    $sipmUser_AdsType = $sipmCur_User->test_input($_POST['sipmUser_AdsType']);
    $sipmUser_AdsPrice = $sipmCur_User->test_input($_POST['sipmUser_AdsPrice']);
    $sipmUser_AdsNegotiation = $sipmCur_User->test_input($_POST['sipmUser_AdsNegotiation']);
    $sipmUser_AdsContactName = $sipmCur_User->test_input($_POST['sipmUser_AdsContactName']);
    $sipmUser_AdsContactNumber = $sipmCur_User->test_input($_POST['sipmUser_AdsContactNumber']);
    $sipmUser_AdsContactEmail = $sipmCur_User->test_input($_POST['sipmUser_AdsContactEmail']);
    $sipmUser_AdsContactAddress = $sipmCur_User->test_input($_POST['sipmUser_AdsContactAddress']);

    $sipmCur_User->UpdateSimpUserDisAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, 2);

    if (isset($_FILES['simpUser_AdsImgUpdate']) && ($_FILES['simpUser_AdsImgUpdate'])) {

        $simpUser_AdsImg = $_FILES['simpUser_AdsImgUpdate']['name'];
        foreach ($simpUser_AdsImg as $i => $value) {
            $GTR = time() . '_' . rand(2000, 100000) . '_' . $simpUser_AdsImg[$i];
            $folderForAdsImg = '../images/adsImages/';
            $faiPath = $folderForAdsImg . $GTR;
            $PathName = $_FILES['simpUser_AdsImgUpdate']['tmp_name'][$i];
            move_uploaded_file($PathName, $faiPath);
            $imgResult = $sipmCur_User->UpdateSimpUserDisAdsImg($sipmuser_PostId, $GTR, 2);
        }
    }
}

//view dis approve ads for edit
if (isset($_POST['viewSimpDisAds'])) {
    $simp_Cid = $_POST['viewSimpDisAds'];
    $sipmuser_PostId = $_POST['viewSimpDisAds'];
    $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerDisAds($simp_Cid, 2);
    // echo $viewSimpUserAds;
    $viewSimpUserAdimg = $sipmCur_User->Viewget_SipmUSerDisAdsImg($sipmuser_PostId, 2);
    // echo $viewSimpUserAdimg;
    $result = array_merge($viewSimpUserAds, $viewSimpUserAdimg);
    echo json_encode($result);
}

if (isset($_POST['action']) && $_POST['action'] === 'countDisapprovedAds') {
    $CountPend = $sipmCur_User->countAdsStatus($simp_Cid, 2);
    echo $CountPend;
}

// update pending ads

if (isset($_FILES['simpUser_AdsImgUpdates'])) {
    $sipmuser_PostId = $sipmCur_User->test_input($_POST['sipmuser_PostId']);
    $simpUser_AdsTitle = $sipmCur_User->test_input($_POST['simpUser_AdsTitle']);
    $sipmUser_AdsDescripion = $sipmCur_User->test_input($_POST['sipmUser_AdsDescripion']);
    $sipmUser_AdsCategory = $sipmCur_User->test_input($_POST['sipmUser_AdsCategory']);
    $sipmUser_AdsType = $sipmCur_User->test_input($_POST['sipmUser_AdsType']);
    $sipmUser_AdsPrice = $sipmCur_User->test_input($_POST['sipmUser_AdsPrice']);
    $sipmUser_AdsNegotiation = $sipmCur_User->test_input($_POST['sipmUser_AdsNegotiation']);
    $sipmUser_AdsContactName = $sipmCur_User->test_input($_POST['sipmUser_AdsContactName']);
    $sipmUser_AdsContactNumber = $sipmCur_User->test_input($_POST['sipmUser_AdsContactNumber']);
    $sipmUser_AdsContactEmail = $sipmCur_User->test_input($_POST['sipmUser_AdsContactEmail']);
    $sipmUser_AdsContactAddress = $sipmCur_User->test_input($_POST['sipmUser_AdsContactAddress']);

    $sipmCur_User->UpdateSimpUserPendAds($sipmuser_PostId, $simpUser_AdsTitle, $sipmUser_AdsPrice, $sipmUser_AdsCategory, $sipmUser_AdsType, $sipmUser_AdsDescripion, $sipmUser_AdsNegotiation, $sipmUser_AdsContactAddress, $sipmUser_AdsContactEmail, $sipmUser_AdsContactName, $sipmUser_AdsContactNumber, 0);

    if (isset($_FILES['simpUser_AdsImgUpdates']) && ($_FILES['simpUser_AdsImgUpdates'])) {

        $simpUser_AdsImg = $_FILES['simpUser_AdsImgUpdates']['name'];
        foreach ($simpUser_AdsImg as $i => $value) {
            $GTR = time() . '_' . rand(2000, 100000) . '_' . $simpUser_AdsImg[$i];
            $folderForAdsImg = '../images/adsImages/';
            $faiPath = $folderForAdsImg . $GTR;
            $PathName = $_FILES['simpUser_AdsImgUpdates']['tmp_name'][$i];
            move_uploaded_file($PathName, $faiPath);
            $imgResult = $sipmCur_User->UpdateSimpUserDisAdsImg($sipmuser_PostId, $GTR, 0);
        }
    }
}
// COUNT all ads
if (isset($_POST['action']) && $_POST['action'] === 'countAllUserAds') {
    $CountAll = $sipmCur_User->countAllUserAds($simp_Cid);
    echo $CountAll;
}
// view user verify ads
if (isset($_POST['viewSimpVerifyAds'])) {
    $simp_Cid = $_POST['viewSimpVerifyAds'];
    $sipmuser_PostId = $_POST['viewSimpVerifyAds'];
    $viewSimpUserAds = $sipmCur_User->Viewget_SipmUSerVerifyAds($simp_Cid, 1);
    $viewSimpUserAdimg = $sipmCur_User->Viewget_SipmUSerAdsVerifyImg($sipmuser_PostId, 1);

    $result = array_merge($viewSimpUserAds, $viewSimpUserAdimg);
    echo json_encode($result);
}

if (isset($_POST['deleteAcct'])) {
    $id = $_POST['deleteAcct'];
    $deleteSipmUserAcct = $sipmCur_User->deleteSimpUserAccount(1, $id);
}

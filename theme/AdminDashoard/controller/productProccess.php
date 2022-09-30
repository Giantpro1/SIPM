<?php 

require 'dbc.php';

$Admindb = new Dbc;

if(isset($_POST['action']) && $_POST['action'] === 'displayPendProduct'){
    $output = '';
    $data = $Admindb->fetchAllPendingAds(0);
    $i = 0;
    // echo json_encode($data);
    if($data){
        foreach($data as $datas){
            if(($datas['sipmUser_AdsVerified']) && $datas['sipmUser_AdsImgVerified'] == 0){
                $productStatus = "verify";
            }else{
                $productStatus = "Not verify";
            }
            $output .='<tr>
            <td>'.++$i.'</td>
            <td class="py-0">
              <img src="'.'../../images/adsImages/'.$datas['simpUser_AdsImg'].'" class="user-image rounded-circle" alt="Product Image">
            </td>
            <td>'.$datas['simpUser_AdsTitle'].'</td>
            <td>'.$datas['sipmuser_PostId'].'</td>
            <td>'.substr($datas['sipmUser_AdsDescripion'],0,18).'</td>
            <td>'.$datas['sipmUser_AdsPrice'].'</td>
            <td>'.$datas['sipmUser_AdsCategory'].'</td>
            <td>
              <div id="tbl-chart-01">'.$productStatus.'</div>
            </td>
            <td>'.date('F d, Y', strtotime($datas['simpUser_AdsDate'])).'</td>
            <td>
              <button data-toggle="modal" class="btn btn-info p-0 px-1 mb-1 viewProduct" id="'.$datas['sipmuser_PostId'].'" data-target="#viewProductDetails" title="view ads"><i class="fa fa-eye"></i></button>
              <button class="btn btn-success p-0 px-1 verifyProduct" id="'.$datas['sipmuser_PostId'].'" title="veify ads"><i class="fa fa-check"></i></button>
            </td>
          </tr>';
        }
        echo $output;
    }else{
        $message = "<p class='text-center text-info'>No pending Ads Found</p>";
        echo $message;
    }
}

if(isset($_POST['viewProduct'])){
    $sipmuser_PostId= $_POST['viewProduct'];
    // $simpUser_ImgId= $_POST['viewProduct'];
    $result = $Admindb->ViewAllProduct($sipmuser_PostId, 0);
    echo json_encode($result);
    // echo $result;
}

<?php 

require 'dbc.php';

$Admindb = new Dbc;

if(isset($_POST['action']) && $_POST['action'] === 'displayPendProduct'){
    $output = '';
    $data = $Admindb->fetchAllPendingAds(0);
    $i = 0;
    echo json_encode($data);
    // if($data){
    //     foreach($data as $datas){
    //         // if(($datas['sipmUser_AdsVerified']) && $datas['sipmUser_AdsImgVerified'] == 0){
    //         //     $productStatus = "verify";
    //         // }else{
    //         //     $productStatus = "Not verify";
    //         // }
    //         $output .='<tr>
    //         <td class="py-0">
    //           <img src="'.$datas['simpUser_AdsImg'].'" class="user-image rounded-circle" alt="Product Image">
    //         </td>
    //         <td>'.$datas['simpUser_AdsTitle'].'</td>
    //         <td>'.$datas['sipmuser_PostId'].'</td>
    //         <td>'.$datas['sipmUser_AdsDescripion'].'</td>
    //         <td>'.$datas['sipmUser_AdsPrice'].'</td>
    //         <td>'.$datas['sipmUser_AdsCategory'].'</td>
    //         <td>
    //           <div id="tbl-chart-01"></div>
    //         </td>
    //         <td>'.$datas['simpUser_AdsDate'].'</td>
    //         <td>
    //           <button class="btn btn-warning"><i class=""></i></button>
    //           <button class="btn btn-danger"><i class=""></i></button>
    //           <button class="btn btn-success"><i class=""></i></button>
    //         </td>
    //       </tr>';
    //     }
    //     echo $output;
    // }
}
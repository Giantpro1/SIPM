<?php  
include './dbc.php';
$ibc = new Dbc;
// if(isset($_POST['action']) && $_POST['action'] === 'displayTrendingAds'){
//     $fetch = $ibc->fetchTrendingAds(1);
//     $output = '';
//     if($fetch){
//         foreach($fetch as $fetchs){
//             $output.='
//             <div class="col-sm-12 col-lg-4">
//             <!-- product card -->
//             <div class="product-item bg-light">
//                 <div class="card shadow">
//                     <div class="thumb-content">
//                         <!-- <div class="price">'.$fetchs['sipmUser_AdsPrice'].'</div> -->
//                         <a href="./pages/single" id="'.$fetchs['sipmuser_PostId'].'">
//                             <img class="card-img-top img-fluid" src="'.'./images/adsImages/'.$fetchs['simpUser_AdsImg'].'" alt="Card image cap">
//                         </a>
//                     </div>
//                     <div class="card-body">
//                         <h4 class="card-title"><a href="./pages/single" id="'.$fetchs['sipmuser_PostId'].'">'.$fetchs['simpUser_AdsTitle'].'</a></h4>
//                         <ul class="list-inline product-meta">
//                             <li class="list-inline-item">
//                                 <a href="./pages/single"><i class="fa fa-folder-open-o"></i>'.$fetchs['sipmUser_AdsCategory'].'</a>
//                             </li>
//                             <li class="list-inline-item">
//                                 <a href="./pages/category"><i class="fa fa-calendar"></i>'.date('F d, Y', strtotime($fetchs['simpUser_AdsDate'])).'</a>
//                             </li>
//                         </ul>
//                         <p class="card-text">'.substr($fetchs['sipmUser_AdsDescripion'],0,100).'</p>
//                         <div class="product-ratings">
//                             <ul class="list-inline">
//                                 <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
//                                 <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
//                                 <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
//                                 <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
//                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
//                             </ul>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>';
//         }
//         echo $output;
//     }else{
       
//     }
// }
if(isset($_POST['action']) && $_POST['action'] === 'searchPro'){
    $request = $ibc->test_input($_POST['request']);
    $productCat = $ibc->test_input($_POST['productCat']);
    $productLoaction = $ibc->test_input($_POST['productLoction']);
    $searchResult = $ibc->productSearch($request, $productCat, $productLoaction, 1);
    $output = '';
    if($searchResult){
        foreach($searchResult as $fetchs){
            $output.='
            <div class="col-md-4">
            <!-- product card -->
            <div class="product-item bg-light">
                <div class="card shadow">
                    <div class="thumb-content">
                         <div class="price">'.$fetchs['sipmUser_AdsPrice'].'</div>
                        <a href="./pages/single?id='.$fetchs['sipmuser_PostId'].'" id="'.$fetchs['sipmuser_PostId'].'">
                            <img class="card-img-top img-fluid  productHeight" src="'.'./images/adsImages/'.$fetchs['simpUser_AdsImg'].'" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="./pages/single?id='.$fetchs['sipmuser_PostId'].'" id="'.$fetchs['sipmuser_PostId'].'">'.$fetchs['simpUser_AdsTitle'].'</a></h4>
                        <ul class="list-inline product-meta">
                            <li class="list-inline-item">
                                <a href="./pages/single?id='.$fetchs['sipmuser_PostId'].'"><i class="fa fa-folder-open-o"></i>'.$fetchs['sipmUser_AdsCategory'].'</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="./pages/category"><i class="fa fa-calendar"></i>'.date('F d, Y', strtotime($fetchs['simpUser_AdsDate'])).'</a>
                            </li>
                        </ul>
                        <p class="card-text">'.substr($fetchs['sipmUser_AdsDescripion'],0,100).'</p>
                        <div class="product-ratings">
                            <ul class="list-inline">
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        echo $output;
}else{
    echo "no product found!";
}

}

// if(isset($_GET['singleProduct'])){
// $simp_Cid = $_GET['singleProduct'];
//     $ppd = $ibc->viewSinglePPD($simp_Cid);
//     // echo json_encode($ppd);
//     $output = '';
//     if($ppd){
//         foreach($ppd as $ppds){
//             $pp = $ibc->viewSinglePPP($ppds['simp_Cid']);
//             // echo json_encode($pp);
//             if($pp){
//                 foreach($pp as $pps){
//                 $img = $ibc->viewSinglePPI($simp_Cid);
//                     $uploadUser = $pps['simp_UserName'];
//                     // echo $uploadUser;
//                 if($img){
//                     foreach($img as $imgs){
//                         $imgResult = '<div class="product-slider-item my-4" data-image="../images/products/products-1.jpg">
//                         <img class="img-fluid w-100" src="'.'./images/adsImages/'.$imgs['simpUser_AdsImg'].'" alt="product-img">
//                     </div>
//                     <div class="product-slider-item my-4" data-image="../images/products/products-2.jpg">
//                         <img class="d-block img-fluid w-100" src="'.'./images/adsImages/'.$imgs['simpUser_AdsImg'].'" alt="Second slide">
//                     </div>
//                     <div class="product-slider-item my-4" data-image="../images/products/products-3.jpg">
//                         <img class="d-block img-fluid w-100" src="'.'./images/adsImages/'.$imgs['simpUser_AdsImg'].'" alt="Third slide">
//                     </div>
//                     <div class="product-slider-item my-4" data-image="../images/products/products-1.jpg">
//                         <img class="d-block img-fluid w-100" src="'.'./images/adsImages/'.$imgs['simpUser_AdsImg'].'" alt="Third slide">
//                     </div>
//                     <div class="product-slider-item my-4" data-image="../images/products/products-2.jpg">
//                         <img class="d-block img-fluid w-100" src="'.'./images/adsImages/'.$imgs['simpUser_AdsImg'].'" alt="Third slide">
//                     </div>';
//                     }
//                     }              
//                 }  
//             }
//       $output .='
//       <div class="product-details">
//       <h1 class="product-title">'.$ppds['simpUser_AdsTitle'].'</h1>
//       <div class="product-meta">
//           <ul class="list-inline">
//               <li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="user-profile">'.$uploadUser.'</a></li>
//               <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="category">'.$ppds['sipmUser_AdsCategory'].'</a></li>
//               <li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="category">'.$ppds['sipmUser_AdsContactAddress'].'</a></li>
//           </ul>
//       </div>

//       <!-- product slider -->
//       <div class="product-slider">
//       '.$imgResult.'
//       </div>
//       <!-- product slider -->

//       <div class="content mt-5 pt-5">
//           <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
//               <li class="nav-item">
//                   <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
//                    aria-selected="true">Product Details</a>
//               </li>
//               <li class="nav-item">
//                   <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
//                    aria-selected="false">Specifications</a>
//               </li>
//               <li class="nav-item">
//                   <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
//                    aria-selected="false">Reviews</a>
//               </li>
//           </ul>
//           <div class="tab-content" id="pills-tabContent">
//               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
//                   <h3 class="tab-title">Product Description</h3>
//                   <p>'.$ppds['sipmUser_AdsDescripion'].'</p>
//               </div>
//               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
//                   <h3 class="tab-title">Product Specifications</h3>
//                   <table class="table table-bordered product-table">
//                       <tbody>
//                           <tr>
//                               <td>Seller Price</td>
//                               <td>'.$ppds['sipmUser_AdsPrice'].'</td>
//                           </tr>
//                           <tr>
//                               <td>Added</td>
//                               <td>'.date('F d, Y', strtotime($ppds['simpUser_AdsDate'])).'</td>
//                           </tr>
//                           <tr>
//                               <td>State</td>
//                               <td>Dhaka</td>
//                           </tr>
//                           <tr>
//                               <td>Brand</td>
//                               <td>Apple</td>
//                           </tr>
//                           <tr>
//                               <td>Condition</td>
//                               <td>Used</td>
//                           </tr>
//                           <tr>
//                               <td>Model</td>
//                               <td>2017</td>
//                           </tr>
//                           <tr>
//                               <td>State</td>
//                               <td>Dhaka</td>
//                           </tr>
//                           <tr>
//                               <td>Battery Life</td>
//                               <td>23</td>
//                           </tr>
//                       </tbody>
//                   </table>
//               </div>
//               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
//                   <h3 class="tab-title">Product Review</h3>
//                   <div class="product-review">
//                       <div class="media">
//                           <!-- Avater -->
//                           <img src="../images/user/user-thumb.jpg" alt="avater">
//                           <div class="media-body">
//                               <!-- Ratings -->
//                               <div class="ratings">
//                                   <ul class="list-inline">
//                                       <li class="list-inline-item">
//                                           <i class="fa fa-star"></i>
//                                       </li>
//                                       <li class="list-inline-item">
//                                           <i class="fa fa-star"></i>
//                                       </li>
//                                       <li class="list-inline-item">
//                                           <i class="fa fa-star"></i>
//                                       </li>
//                                       <li class="list-inline-item">
//                                           <i class="fa fa-star"></i>
//                                       </li>
//                                       <li class="list-inline-item">
//                                           <i class="fa fa-star"></i>
//                                       </li>
//                                   </ul>
//                               </div>
//                               <div class="name">
//                                   <h5>Jessica Brown</h5>
//                               </div>
//                               <div class="date">
//                                   <p>Mar 20, 2018</p>
//                               </div>
//                               <div class="review-comment">
//                                   <p>
//                                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
//                                       riamipsa eaque.
//                                   </p>
//                               </div>
//                           </div>
//                       </div>
//                       <div class="review-submission">
//                           <h3 class="tab-title">Submit your review</h3>
//                           <!-- Rate -->
//                           <div class="rate">
//                               <div class="starrr"></div>
//                           </div>
//                           <div class="review-submit">
//                               <form action="#" method="POST" class="row">
//                                   <div class="col-lg-6 mb-3">
//                                       <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
//                                   </div>
//                                   <div class="col-lg-6 mb-3">
//                                       <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
//                                   </div>
//                                   <div class="col-12 mb-3">
//                                       <textarea name="review" id="review" rows="6" class="form-control" placeholder="Message" required></textarea>
//                                   </div>
//                                   <div class="col-12">
//                                       <button type="submit" class="btn btn-main">Sumbit</button>
//                                   </div>
//                               </form>
//                           </div>
//                       </div>
//                   </div>
//               </div>
//           </div>
//       </div>
//   </div>';
//         }
//         echo $output;
//     }
// }

// $result = $ibc->viewSinglePPD($simp_Cid);
//     echo json_encode($result);
//     if($result){

//     }
//     if($img){
//         $PP = $ibc->viewSinglePPP($simp_Cid);
//         echo json_encode($PP);
//     }
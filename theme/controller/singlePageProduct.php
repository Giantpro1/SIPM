<?php  
require 'session.php';
$ibc = new Dbc;

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
                        <a href="single?id='.$fetchs['sipmuser_PostId'].'" id="'.$fetchs['sipmuser_PostId'].'">
                            <img class="card-img-top img-fluid  productHeight" src="'.'../images/adsImages/'.$fetchs['simpUser_AdsImg'].'" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="single?id='.$fetchs['sipmuser_PostId'].'" id="'.$fetchs['sipmuser_PostId'].'">'.$fetchs['simpUser_AdsTitle'].'</a></h4>
                        <ul class="list-inline product-meta">
                            <li class="list-inline-item">
                                <a href="single?id='.$fetchs['sipmuser_PostId'].'"><i class="fa fa-folder-open-o"></i>'.$fetchs['sipmUser_AdsCategory'].'</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="category"><i class="fa fa-calendar"></i>'.date('F d, Y', strtotime($fetchs['simpUser_AdsDate'])).'</a>
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
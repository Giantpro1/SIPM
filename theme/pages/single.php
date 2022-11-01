<?php
include '../controller/dbc.php';
$ibc = new Dbc;

?>
<!DOCTYPE html>

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>SIPM</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="SIPM">
  <meta name="generator" content="SIPM">

  <!-- favicon -->
  <link href="../images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../plugins/slick/slick.css" rel="stylesheet">
  <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  
  <link href="../css/pass.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	        <?php include '../partial/header.php'; ?>
			</div>
		</div>
	</div>
</header>
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search nice-select-white">
					<form id="product_Search">
						<div class="form-row align-items-center">
							<div class="form-group col-xl-4 col-lg-3 col-md-6">
								<input type="text" name="request" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-lg-3 col-md-6">
							<select class="w-100 form-control mt-lg-1 mt-md-2" name="productCat">
								<option value="">category</option>
								<option value="Electronic/Gadget">Electronic/Gadget</option>
								<option value="Furnitures">Furnitures</option>
								<option value="Real Estate">Real Estate</option>
								<option value="Vehicles">Vehicles</option>
								<option value="Job/Employments">Job/Employments</option>
								<option value="Restaurant">Restaurant</option>
								<option value="Pets">Pets</option>
								<option value="Shopping">Shopping</option>
								<option value="services">services</option>
							</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<input type="text" name="productLoction" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-xl-2 col-lg-3 col-md-6">

								<button type="submit" id="search_Btn" class="btn btn-primary active w-100">Search Now</button>
							</div>
							<div class="row mt-3" id="search_Result"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-lg-8">
				<div class="product-details">
					<?Php
						if(isset($_GET['id'])){
							$ppd = $ibc->viewSinglePPD($_GET['id']);
							$output = '';
							if($ppd){
								foreach($ppd as $ppds){
									$pp = $ibc->viewSinglePPP($ppds['simp_Cid']);
									// echo json_encode($pp);
									if($pp){
										foreach($pp as $pps){
											// echo json_encode($pps);
										$img = $ibc->viewSinglePPI($ppds['sipmuser_PostId']);
											$uploadUser = $pps['simp_UserName'];
											// echo $uploadUser;
										if($img){
											foreach($img as $imgs){
												// echo json_encode($imgs);
											// $imgRe =  unserialize(base64_decode($imgs['simpUser_AdsImg']));
											if($imgs['simpUser_AdsImg'] > 1){
												// $imgCount = count($imgs['simpUser_AdsImg']);
											// echo base64_encode($imgs['simpUser_AdsImg']);
												
											}
											}
										}              
									}  
								}
							}
						}
						}
					?>
					<h1 class="product-title"><?=$ppds['simpUser_AdsTitle'];?></h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href=""><?=$uploadUser;?></a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href=""><?=$ppds['sipmUser_AdsCategory'];?></a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href=""><?=$ppds['sipmUser_AdsContactAddress']; ?></a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						<div class="product-slider-item my-4" data-image="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>">
							<img class="img-fluid w-100" src="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>" alt="product-img">
						</div>
						<div class="product-slider-item my-4" data-image="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>">
							<img class="d-block img-fluid w-100" src="../images/adsImages/<?=$imgs['simpUser_AdsImg']; ?>" alt="Second slide">
						</div>
						<div class="product-slider-item my-4" data-image="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>">
							<img class="d-block img-fluid w-100" src="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>">
							<img class="d-block img-fluid w-100" src="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>">
							<img class="d-block img-fluid w-100" src="../images/adsImages/<?= $imgs['simpUser_AdsImg']; ?>" alt="Third slide">
						</div>
					</div>
					<!-- product slider -->

					<div class="content mt-5 pt-5 shadow">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">Product Details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Specifications</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Reviews</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Product Description</h3>
								<p><?=$ppds['sipmUser_AdsDescripion']; ?></p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Product Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Seller Price</td>
											<td><?=$ppds['sipmUser_AdsPrice']; ?></td>
										</tr>
										<tr>
											<td>Added</td>
											<td><?= date('F d, Y', strtotime($ppds['simpUser_AdsDate']));?></td>
										</tr>
										<tr>
											<td>Brand</td>
											<td>Apple</td>
										</tr>
										<tr>
											<td>Model</td>
											<td>2017</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Product Review</h3>
								<div class="product-review">
									<div class="media">
										<!-- Avater -->
										<img src="<?=$pps['sipmUser_ProfileImg']; ?>" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">
												<ul class="list-inline">
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
												</ul>
											</div>
											<div class="name">
												<h5><?=$pps['sipmUser_FirstName']; ?> <i><?=$pps['sipmUser_SecondName']; ?></i> </h5>
											</div>
											<div class="date">
												<p><?= date('F d, Y', strtotime($pps['simpUserReg_Date']));?></p>
											</div>
											<div class="review-comment">
												<p>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
													riamipsa eaque.
												</p>
											</div>
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">Submit your review</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">
											<form action="#" method="POST" class="row">
												<div class="col-lg-6 mb-3">
													<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
												</div>
												<div class="col-lg-6 mb-3">
													<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
												</div>
												<div class="col-12 mb-3">
													<textarea name="review" id="review" rows="6" class="form-control" placeholder="Message" required></textarea>
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-main">Sumbit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget price text-center shadow">
						<h4>Price</h4>
						<p><?=$ppds['sipmUser_AdsPrice'];?></p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center shadow">
						<img class="rounded-circle img-fluid mb-5 px-5" src="<?=$pps['sipmUser_ProfileImg'] ?>" alt="">
						<h4><a href="#"><?=$pps['sipmUser_FirstName']; ?> <i><?=$pps['sipmUser_SecondName']; ?></i></a></h4>
						<p class="member-time">Member Since <?= date('F d, Y', strtotime($pps['simpUserReg_Date']));?></p>
						<a href="viewAllUserAds?id=<?= $ppds['simp_Cid']?>">See all ads</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="contact-us" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>
							<li class="list-inline-item"><a href="chat?id=<?= $ppds['simp_Cid']?>" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3"> <i class="fa fa-comment"></i> </a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map shadow">
						<div class="map">
							<div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate shadow">
						<!-- Heading -->
						<h5 class="widget-header text-center">What would you rate
							<br>
							this product</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer shadow">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center shadow">
						<!-- Coupon description -->
						<p>Have a great product to post ? Share it with
							your fellow users.
						</p>
						<!-- Submii button -->
						<a href="single" class="btn btn-transparent-white">Submit Listing</a>
					</div>

				</div>
			</div>
			
		</div>
	</div>
	<!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="../images/logo-footer.png" alt="logo">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="dashboard-my-ads">My Ads</a></li>
            <li><a href="dashboard-favourite-ads">Favourite Ads</a></li>
            <li><a href="dashboard-archived-ads">Archived Ads</a></li>
            <li><a href="dashboard-pending-ads">Pending Ads</a></li>
            <li><a href="terms-condition">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category">Category</a></li>
            <li><a href="single">Single Page</a></li>
            <li><a href="store">Store Single</a></li>
            <li><a href="single-blog">Single Post</a>
            </li>
            <li><a href="blog">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex  align-items-center">
            <a href="../index">
              <!-- Icon -->
              <img src="../images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="../index"><img src="../images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="../index" class=" ml-3"><img src="../images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a></p>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
          <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
</footer>

<!-- 
Essential Scripts
=====================================-->
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/popper.min.js"></script>
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<script src="../plugins/bootstrap/bootstrap-slider.js"></script>
<script src="../plugins/tether/js/tether.min.js"></script>
<script src="../plugins/raty/jquery.raty-fa.js"></script>
<script src="../plugins/slick/slick.min.js"></script>
<script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../plugins/google-map/map.js" defer></script>

<script src="../js/script.js"></script>
<script src="../js/single.js"></script>

</body>

</html>
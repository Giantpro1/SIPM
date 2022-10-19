<?php
include './controller/dbc.php';
$ibc = new Dbc;



?>
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<title>SIPM</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sharkzy Innovation Ads Product Marketing">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Sharkzy Innovation">
	<meta name="generator" content="Sharkzy Innovation Ads Product Marketing">
	<!-- favicon -->
	<link href="images/favicon.png" rel="shortcut icon">
	<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/pass.css" rel="stylesheet">
</head>

<body class="body-wrapper">


	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index">
							<img src="images/logo.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index" title="">Home <i class="fa fa-home"></i></a>
								</li>
								<li><a class="dropdown-item @@package" href="./pages/package" title="package">Package <i class="fa fa-gift"></i></a></li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="./pages/user-profile" title="profile"><i class="fa fa-user fa-lg"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="./pages/ad-listing"><i
											class="fa fa-plus-circle"></i> Add Listing</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>


	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Buy & Sell Near You </h1>
						<p>Join the millions who buy and sell from each other <br> everyday in local communities around
							the world</p>
						<div class="short-popular-category-list text-center">
							<h2>Popular Category</h2>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="./pages/category"><i class="fa fa-bed"></i> Hotel</a>
								</li>
								<li class="list-inline-item">
									<a href="./pages/category"><i class="fa fa-grav"></i> Fitness</a>
								</li>
								<li class="list-inline-item">
									<a href="./pages/category"><i class="fa fa-car"></i> Cars</a>
								</li>
								<li class="list-inline-item">
									<a href="./pages/category"><i class="fa fa-cutlery"></i> Restaurants</a>
								</li>
								<li class="list-inline-item">
									<a href="./pages/category"><i class="fa fa-coffee"></i> Cafe</a>
								</li>
							</ul>
						</div>

					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form>
										<div class="form-row">
											<div class="form-group col-xl-4 col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="product_Search"
													placeholder="What are you looking for">
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Category</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4"
													placeholder="Location">
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
												<button type="submit" id="search_Btn"
													class="btn btn-primary active w-100">Search Now</button>
											</div>
											<!-- <div class="row"> -->
											<div class="row" id="search_Result"></div>
											<!-- </div> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
							<?php
								$results = $ibc->fetchTrendingAds(1);
								foreach ($results as $result):
							?>
							<div class="col-sm-12 col-lg-4">
							<!-- product card -->
								<div class="product-item bg-light">
									<div class="card shadow">
										<div class="thumb-content">
											<div class="price"><?=$result['sipmUser_AdsPrice'] ?></div>
											<a href="./pages/single?id=<?= $result['sipmuser_PostId']?>" class="singlePage" id="<?= $result['sipmuser_PostId']?>">
												<img class="card-img-top img-fluid productHeight" src="./images/adsImages/<?= $result['simpUser_AdsImg'] ?>"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="./pages/single?id=<?= $result['sipmuser_PostId']?>" id="<?= $result['sipmuser_PostId']?>"  class="singlePage"><?= $result['simpUser_AdsTitle'] ?></a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="./pages/single?id=<?= $result['sipmuser_PostId']?>" class="singlePage" id="<?= $result['simp_Cid']?>"><i
															class="fa fa-folder-open-o"></i><?= $result['sipmUser_AdsCategory']?></a>
												</li>
												<li class="list-inline-item">
													<a href="./pages/category"><i class="fa fa-calendar"></i><?= date('F d, Y', strtotime($result['simpUser_AdsDate']))?></a>
												</li>
											</ul>
											<p class="card-text"><?= substr($result['sipmUser_AdsDescripion'],0,100) ?></p>
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
							</div>
							<?php endforeach; ?>
					</div> 
				</div>
			</div>
		</div>
	</section>



	<!--==========================================
=            All Category Section            =
===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-laptop icon-bg-1"></i>
									<h4>Electronics</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Laptops <span>93</span></a></li>
									<li><a href="./pages/category">Iphone <span>233</span></a></li>
									<li><a href="./pages/category">Microsoft <span>183</span></a></li>
									<li><a href="./pages/category">Monitors <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-apple icon-bg-2"></i>
									<h4>Restaurants</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Cafe <span>393</span></a></li>
									<li><a href="./pages/category">Fast food <span>23</span></a></li>
									<li><a href="./pages/category">Restaurants <span>13</span></a></li>
									<li><a href="./pages/category">Food Track<span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-home icon-bg-3"></i>
									<h4>Real Estate</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Farms <span>93</span></a></li>
									<li><a href="./pages/category">Gym <span>23</span></a></li>
									<li><a href="./pages/category">Hospitals <span>83</span></a></li>
									<li><a href="./pages/category">Parolurs <span>33</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-shopping-basket icon-bg-4"></i>
									<h4>Shoppings</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Mens Wears <span>53</span></a></li>
									<li><a href="./pages/category">Accessories <span>212</span></a></li>
									<li><a href="./pages/category">Kids Wears <span>133</span></a></li>
									<li><a href="./pages/category">It & Software <span>143</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-briefcase icon-bg-5"></i>
									<h4>Jobs</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">It Jobs <span>93</span></a></li>
									<li><a href="./pages/category">Cleaning & Washing <span>233</span></a></li>
									<li><a href="./pages/category">Management <span>183</span></a></li>
									<li><a href="./pages/category">Voluntary Works <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-car icon-bg-6"></i>
									<h4>Vehicles</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Bus <span>193</span></a></li>
									<li><a href="./pages/category">Cars <span>23</span></a></li>
									<li><a href="./pages/category">Motobike <span>33</span></a></li>
									<li><a href="./pages/category">Rent a car <span>73</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-paw icon-bg-7"></i>
									<h4>Pets</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Cats <span>65</span></a></li>
									<li><a href="./pages/category">Dogs <span>23</span></a></li>
									<li><a href="./pages/category">Birds <span>113</span></a></li>
									<li><a href="./pages/category">Others <span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">

								<div class="header">
									<i class="fa fa-laptop icon-bg-8"></i>
									<h4>Services</h4>
								</div>
								<ul class="category-list">
									<li><a href="./pages/category">Cleaning <span>93</span></a></li>
									<li><a href="./pages/category">Car Washing <span>233</span></a></li>
									<li><a href="./pages/category">Clothing <span>183</span></a></li>
									<li><a href="./pages/category">Business <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->


					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--====================================
=            Call to Action            =
=====================================-->

	<section class="call-to-action overly bg-3 section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Start today to get more exposure and
							grow your business</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="./pages/ad-listing">Add
									Listing</a></li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="./pages/category">Browser
									Listing</a></li>
						</ul>
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
						<img src="images/logo-footer.png" alt="logo">
						<!-- description -->
						<p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
					<div class="block">
						<h4>Site Pages</h4>
						<ul>
							<li><a href="./pages/dashboard-my-ads">My Ads</a></li>
							<li><a href="./pages/dashboard-favourite-ads">Favourite Ads</a></li>
							<li><a href="./pages/dashboard-archived-ads">Archived Ads</a></li>
							<li><a href="./pages/dashboard-pending-ads">Pending Ads</a></li>
							<li><a href="./pages/terms-condition">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
					<div class="block">
						<h4>Admin Pages</h4>
						<ul>
							<li><a href="./pages/category">Category</a></li>
							<li><a href="./pages/single">Single Page</a></li>
							<li><a href="./pages/store">Store Single</a></li>
							<li><a href="./pages/single-blog">Single Post</a>
							</li>
							<li><a href="./pages/blog">Blog</a></li>



						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<div class="mobile d-flex  align-items-center">
							<a href="index">
								<!-- Icon -->
								<img src="images/footer/phone-icon.png" alt="mobile-icon">
							</a>
							<p class="mb-0">Get the Dealsy Mobile App and Save more</p>
						</div>
						<div class="download-btn d-flex my-3">
							<a href="index"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
							<a href="index" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid"
									alt=""></a>
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
						<p>Copyright &copy;
							<script>
								var CurrentYear = new Date().getFullYear()
								document.write(CurrentYear)
							</script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- Social Icons -->
					<ul class="social-media-icons text-center text-lg-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com"></a></li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com"></a></li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com"></a></li>
						<li><a class="fa fa-github-alt" href="https://www.github.com"></a></li>
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
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/popper.min.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="plugins/google-map/map.js" defer></script>

	<script src="js/script.js"></script>
	<script src="js/index.js"></script>

</body>

</html>
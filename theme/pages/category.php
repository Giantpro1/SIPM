<?php include '../controller/dbc.php';
$action = new Dbc();
?>
<!DOCTYPE html>

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>SIMP</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="SIMP">
	<meta name="generator" content="SIMP">

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

	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/pass.css" rel="stylesheet">

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
									<input type="text" name="request" class="form-control my-2 my-lg-0" id="inputtext4"
										placeholder="What are you looking for">
								</div>
								<div class="form-group col-lg-3 col-md-6">
									<select class="w-100 form-control my-2 my-lg-0" name="productCat">
										<option>Category</option>
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
									<input type="text" name="productLoction" class="form-control my-2 my-lg-0" id="inputLocation4"
										placeholder="Location">
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
	<section class="section-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
						<h2>Results For "<?=$_GET['id'];?>"</h2>
						<p>123 Results on 12 December, 2017</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Category</h4>
							<ul class="category-list">
								<li><a href="category">Laptops <span>93</span></a></li>
								<li><a href="category">Iphone <span>233</span></a></li>
								<li><a href="category">Microsoft <span>183</span></a></li>
								<li><a href="category">Monitors <span>343</span></a></li>
							</ul>
						</div>

						<div class="widget category-list">
							<h4 class="widget-header">Nearby</h4>
							<ul class="category-list">
								<li><a href="category">New York <span>93</span></a></li>
								<li><a href="category">New Jersy <span>233</span></a></li>
								<li><a href="category">Florida <span>183</span></a></li>
								<li><a href="category">California <span>120</span></a></li>
								<li><a href="category">Texas <span>40</span></a></li>
								<li><a href="category">Alaska <span>81</span></a></li>
							</ul>
						</div>

						<div class="widget filter">
							<h4 class="widget-header">Show Produts</h4>
							<select>
								<option>Popularity</option>
								<option value="1">Top rated</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>

						<div class="widget price-range w-100">
							<h4 class="widget-header">Price Range</h4>
							<div class="block">
								<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000"
									data-slider-step="5" data-slider-value="[0,5000]">
								<div class="d-flex justify-content-between mt-2">
									<span class="value">$10 - $5000</span>
								</div>
							</div>
						</div>

						<div class="widget product-shorting">
							<h4 class="widget-header">By Condition</h4>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Brand New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Almost New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Gently New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Havely New
								</label>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="category-search-filter">
						<div class="row">
							<div class="col-md-6 text-center text-md-left">
								<strong>Short</strong>
								<select>
									<option>Most Recent</option>
									<option value="1">Most Popular</option>
									<option value="2">Lowest Price</option>
									<option value="4">Highest Price</option>
								</select>
							</div>
							<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
								<div class="view">
									<strong>Views</strong>
									<ul class="list-inline view-switcher">
										<li class="list-inline-item">
											<a href="#!" onclick="event.preventDefault();" class="text-info"><i
													class="fa fa-th-large"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="ad-list-view?id=<?=$_GET['id']?>"><i class="fa fa-reorder"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-grid-list">
						<div class="row mt-30">
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<?php 
								if(isset($_GET['id']))
									// echo $_GET['id'];
									$result = $action->catProduct($_GET['id'], 1);
									// echo json_encode($result);
									foreach($result as $results):
								
								?>
								<div class="product-item bg-light">
									<div class="card shadow">
										<div class="thumb-content">
											<div class="price"><?=$results['sipmUser_AdsPrice']?></div>
											<a href="single?id=<?= $results['sipmuser_PostId']?>">
												<img class="card-img-top productHeight img-fluid"
													src="../images/adsImages/<?=$results['simpUser_AdsImg']?>" class="" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single?id=<?= $results['sipmuser_PostId']?>"><?=$results['simpUser_AdsTitle']?></a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single?id=<?= $results['sipmuser_PostId']?>"><i
															class="fa fa-folder-open-o"></i><?=$results['sipmUser_AdsCategory']?></a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i><?= date('F d, Y', strtotime($results['simpUser_AdsDate']))?></a>
												</li>
											</ul>
											<p class="card-text"><?= substr($results['sipmUser_AdsDescripion'],0,100) ?></p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
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
					<div class="pagination justify-content-center">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="category.html" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="category.html">1</a></li>
								<li class="page-item active"><a class="page-link" href="category.html">2</a></li>
								<li class="page-item"><a class="page-link" href="category.html">3</a></li>
								<li class="page-item">
									<a class="page-link" href="category.html" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--============================
=            Footer            =
=============================-->


	<?include '../partial/footer.php' ?>
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
	<script src="../js/category.js"></script>

</body>

</html>
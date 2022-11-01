<?php include '../controller/dbc.php';
$action = new Dbc();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

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
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "<?= $_GET['id'] ?>"</h2>
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
		<li><a href="category">Microsoft  <span>183</span></a></li>
		<li><a href="category">Monitors <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Nearby</h4>
	<ul class="category-list">
		<li><a href="category">New York <span>93</span></a></li>
		<li><a href="category">New Jersy <span>233</span></a></li>
		<li><a href="category">Florida  <span>183</span></a></li>
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
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
						data-slider-value="[0,5000]">
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
										<a href="category"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="category" class="text-info"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
        <?php 
								if(isset($_GET['id']))
									// echo $_GET['id'];
									$result = $action->catProduct($_GET['id'], 1);
									// echo json_encode($result);
									foreach($result as $results):
								
								?>
				<!-- ad listing list  -->
				<div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
            <a href="single">
                <img src="../images/adsImages/<?=$results['simpUser_AdsImg']?>" class="img-fluid" alt="">
            </a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">
                        <div>
                            <a href="single?id=<?= $results['sipmuser_PostId']?>" class="font-weight-bold"><?=$results['simpUser_AdsTitle']?></a>
                        </div>
                        <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item"><a href=""> <i class="fa fa-folder-open-o"></i><?=$results['sipmUser_AdsCategory']?></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-calendar"></i><?= date('F d, Y', strtotime($results['simpUser_AdsDate']))?></a></li>
                        </ul>
                        <p class="pr-5"><?= substr($results['sipmUser_AdsDescripion'],0,100) ?></p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-ratings float-lg-right pb-3">
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
</div>
			<?php endforeach; ?>
				<!-- ad listing list  -->

				<!-- pagination -->
				<div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="ad-list-view" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="ad-list-view">1</a></li>
							<li class="page-item active"><a class="page-link" href="ad-list-view">2</a></li>
							<li class="page-item"><a class="page-link" href="ad-list-view">3</a></li>
							<li class="page-item">
								<a class="page-link" href="ad-list-view" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->
			</div>
		</div>
	</div>
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
<script src="../js/category.js"></script>

</body>

</html>
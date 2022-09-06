<?php
require_once '../controller/session.php';

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
  
  <link href="../css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="../index">
						<img src="../images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item @@home">
								<a class="nav-link" href="../index">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@dashboardPage" href="dashboard">Dashboard</a></li>
									<li><a class="dropdown-item @@dashboardMyAds" href="dashboard-my-ads">Dashboard My Ads</a></li>
									<li><a class="dropdown-item @@dashboardFavouriteAds" href="dashboard-favourite-ads">Dashboard Favourite Ads</a></li>
									<li><a class="dropdown-item @@dashboardArchivedAds" href="dashboard-archived-ads">Dashboard Archived Ads</a></li>
									<li><a class="dropdown-item @@dashboardPendingAds" href="dashboard-pending-ads">Dashboard Pending Ads</a></li>
									
									<li class="dropdown dropdown-submenu dropright">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
					
										<ul class="dropdown-menu" aria-labelledby="dropdown0501">
											<li><a class="dropdown-item" href="../index">Submenu 01</a></li>
											<li><a class="dropdown-item" href="../index">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@pages">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@about" href="about-us">About Us</a></li>
									<li><a class="dropdown-item @@contact" href="contact-us">Contact Us</a></li>
									<li><a class="dropdown-item @@profile" href="user-profile">User Profile</a></li>
									<li><a class="dropdown-item @@404" href="404">404 Page</a></li>
									<li><a class="dropdown-item @@package" href="package">Package</a></li>
									<li><a class="dropdown-item @@singlePage" href="single">Single Page</a></li>
									<li><a class="dropdown-item @@store" href="store">Store Single</a></li>
									<li><a class="dropdown-item @@blog" href="blog">Blog</a></li>
									<li><a class="dropdown-item @@singleBlog" href="single-blog">Blog Details</a></li>
									<li><a class="dropdown-item @@terms" href="terms-condition">Terms &amp; Conditions</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="category">Ad-Gird View</a></li>
									<li><a class="dropdown-item @@listView" href="ad-list-view">Ad-List View</a></li>
									
									<li class="dropdown dropdown-submenu dropleft">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
					
										<ul class="dropdown-menu" aria-labelledby="dropdown0201">
											<li><a class="dropdown-item" href="../index">Submenu 01</a></li>
											<li><a class="dropdown-item" href="../index">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="ad-listing"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<section class="advt-post bg-gray py-5">
  <div class="container">
    <form id ="simpUserAds_Uploading" action="" enctype="multipart/form-data">
      <!-- Post Your ad start -->
      <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
        <div class="row">
          <div class="col-lg-12">
            <h3>Post Your ad</h3>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Title Of Ad:</h6>
            <input type="text" name="simpUser_AdsTitle" class="form-control bg-white" placeholder="Ad title go There" required>
            <h6 class="font-weight-bold pt-4 pb-1">Ad Type:</h6>
            <div class="row px-3">
              <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white">
                <input type="radio" name="sipmUser_AdsType" value="personal" id="personal" required>
                <label for="personal" class="py-2">Personal</label>
              </div>
              <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                <input type="radio" name="sipmUser_AdsType" value="business" id="business" required>
                <label for="business" class="py-2">Business</label>
              </div>
            </div>
            <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
            <textarea name="sipmUser_AdsDescripion" id="" class="form-control bg-white" rows="7"
              placeholder="Write details about your product" required></textarea>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
            <select name="sipmUser_AdsCategory" class="form-control w-100 bg-white" id="inputGroupSelect">
              <option value="">Select category</option>
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
            <div class="price">
              <h6 class="font-weight-bold pt-4 pb-1">Item Price ($ USD):</h6>
              <div class="row px-3">
                <div class="col-lg-6 rounded my-2 px-0">
                  <input type="text" name="sipmUser_AdsPrice" class="form-control bg-white" placeholder="Price" id="price">
                </div>
                <div class="col-lg-4 ml-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                  <input type="radio" name="sipmUser_AdsNegotiation" value="Negotiable" id="Negotiable">
                  <label for="Negotiable" class="py-2">Negotiable</label>
                </div>
                <div class="col-lg-4 ml-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                  <input type="radio" name="sipmUser_AdsNegotiation" value="Not Negotiable" id="Negotiable">
                  <label for="Negotiable" class="py-2">Not Negotiable</label>
                </div>
              </div>
            </div>
            <div class="choose-file text-center my-4 py-4 rounded bg-white">
              <label for="file-upload">
                <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                <span class="d-block">or</span>
                <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                <span class="d-block">Maximum upload file size: 500 MB</span>
                <input type="file" class="form-control-file d-none" id="file-upload" multiple name="simpUser_AdsImg[]">
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <!-- Post Your ad end -->

      <!-- seller-information start -->
      <fieldset class="border px-3 px-md-4 py-4 my-5 seller-information bg-gray">
        <div class="row">
          <div class="col-lg-12">
            <h3>Seller Information</h3>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
            <input type="text" name="sipmUser_AdsContactName" placeholder="Contact name" class="form-control bg-white" required>
            <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
            <input type="text" name="sipmUser_AdsContactNumber" placeholder="Contact Number" class="form-control bg-white" required>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Contact Email:</h6>
            <input type="email" name="sipmUser_AdsContactEmail" placeholder="name@yourmail.com" class="form-control bg-white" required>
            <h6 class="font-weight-bold pt-4 pb-1">Contact Address:</h6>
            <input type="text" name="sipmUser_AdsContactAddress" placeholder="Your address" class="form-control bg-white" required>
          </div>
        </div>
      </fieldset>
      <!-- seller-information end-->

      <!-- ad-feature start -->
      <fieldset class="border bg-white px-3 px-md-4 py-4 my-5 ad-feature bg-gray">
        <div class="row">
          <div class="col-lg-12">

            <h3 class="pb-3">Make Your Ad Featured
              <span class="float-right font-weight-normal text-success" data-toggle="tooltip" data-placement="top" title="Autem, architecto quisquam distinctio totam aut voluptatibus placeat ut nobis molestias rerum!">What is featured ad ?</span>
            </h3>

          </div>
          <div class="col-lg-6 my-3">
            <span class="mb-3 d-block">Premium Ad Options:</span>
            <ul>
              <li>
                <input type="radio" id="regular-ad" name="adfeature">
                <label for="regular-ad" class="font-weight-bold text-dark py-1">Regular Ad</label>
                <span>$00.00</span>
              </li>
              <li>
                <input type="radio" id="Featured-Ads" name="adfeature">
                <label for="Featured-Ads" class="font-weight-bold text-dark py-1">Top Featured
                  Ads</label>
                <span>$59.00</span>
              </li>
              <li>
                <input type="radio" id="urgent-Ads" name="adfeature">
                <label for="urgent-Ads" class="font-weight-bold text-dark py-1">Urgent Ads</label>
                <span>$79.00</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 my-3">
            <span class="mb-3 d-block">Please select the preferred payment method:</span>
            <ul>
              <li>
                <input type="radio" id="bank-transfer" name="adfeature">
                <label for="bank-transfer" class="font-weight-bold text-dark py-1">Direct Bank
                  Transfer</label>
              </li>
              <li>
                <input type="radio" id="Cheque-Payment" name="adfeature">
                <label for="Cheque-Payment" class="font-weight-bold text-dark py-1">Cheque
                  Payment</label>
              </li>
              <li>
                <input type="radio" id="Credit-Card" name="adfeature">
                <label for="Credit-Card" class="font-weight-bold text-dark py-1">Credit Card</label>
              </li>
            </ul>
          </div>
        </div>
      </fieldset>
      <!-- ad-feature start -->

      <!-- submit button -->
      <div class="checkbox d-inline-flex">
        <input type="checkbox" id="terms-&-condition" class="mt-1">
        <label for="terms-&-condition" class="ml-2">By click you must agree with our
          <span> <a class="text-success" href="terms-condition">Terms & Condition and Posting
              Rules.</a></span>
        </label>
      </div>
      <button id="simpUserAds_UploadingBtn" type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
    </form>
  </div>
</section>
<!--============================
=            Footer            =
=============================-->


 <?php include '../includes/footers.php'?>

<!-- 
Essential Scripts
=====================================-->
<script src="../plugins/jquery-nice-select/js/jquery.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/popper.min.js"></script>
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<script src="../plugins/bootstrap/bootstrap-slider.js"></script>
<script src="../plugins/tether/js/tether.min.js"></script>
<script src="../plugins/raty/jquery.raty-fa.js"></script>
<script src="../plugins/slick/slick.min.js"></script>
<script src="../plugins/jquery-nice-select/js/sweetAlert.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../plugins/google-map/map.js" defer></script>

<script src="../js/script.js"></script>
<script>
  $(document).ready(function(){
    $("#simpUserAds_Uploading").submit(function(e){
      e.preventDefault()

      $("#simpUserAds_UploadingBtn").text("PleaseWait...")
      $.ajax({
        url: '../controller/process.php',
        method: 'POST',
        cache: false,
        processData: false,
        contentType: false,
        data : new FormData(this),
        success : function(response){
          console.log(response)

          if(response === 'product upload successfully' && response === 'product imgs upload successfully'){
              swal.fire({
                title: 'Done',
                icon: 'success',
                text: 'product upload successfully',
              }).then(
                window.reload()
              )
          }else if(response ==='some fields are empty!'){
            swal.fire({
              title: 'Ooops!',
              icon: 'error',
              text: 'some fields are empty!'
            })
          }else{
            
          }
        }
      })
    })
    
  })
</script>

</body>

</html>
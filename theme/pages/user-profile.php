
<?php include '../controller/session.php'; ?>

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
							<li class="nav-item dropdown dropdown-slide active">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@about" href="about-us">About Us</a></li>
									<li><a class="dropdown-item @@contact" href="contact-us">Contact Us</a></li>
									<li><a class="dropdown-item active" href="user-profile">User Profile</a></li>
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
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<?php if (!$simpUser_ProPic) : ?>
							<img src="../images/user/user-thumb.jpg" alt="" class="">
							<?php else: ?>
								<img src= "<?='../controller/'.$simpUser_ProPic; ?>"  class="" >
								<?php endif; ?>
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?=$simpUserName; ?></h5>
					</div>
					<!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li><a href="../index">Savings Dashboard</a></li>
              <li><a href="../index">Saved Offer <span>(5)</span></a></li>
              <li><a href="../index">Favourite Stores <span>(3)</span></a></li>
              <li><a href="../index">Recommended</a></li>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Edit profile</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Edit Personal Information</h3>
							<form id="sipmUser_UpdateProfile" action=""  enctype="multipart/form-data">
								<!-- First Name -->
								<div class="form-group">
									<label for="first-name">First Name</label>
									<input type="text" name="sipmUser_FirstName" class="form-control" id="first-name" value="<?=$simpFirstName; ?>">
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last-name">Last Name</label>
									<input type="text" name="sipmUser_SecondName" class="form-control" id="last-name" value="<?=$simpSecondName; ?>">
								</div>
								<!-- File chooser -->
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" name="sipmUser_ProfileImg" class="form-control-file mt-2 pt-1" id="input-file">
								 </div>
								<!-- Comunity Name -->
								<div class="form-group">
									<label for="comunity-name">Community Name</label>
									<input type="text" name="sipmUser_CommunityName" class="form-control" id="comunity-name" value="<?= $simpCommunity; ?>">
								</div>
								<!-- Checkbox -->
								<div class="form-check">
								  <label class="form-check-label" for="hide-profile">
									<input class="form-check-input mt-1" name="sipmUser_HidePro" type="checkbox" value="hideprofile" id="hide-profile">
									Hide Profile from Public/Comunity
								  </label>
								</div>
								<!-- Zip Code -->
								<div class="form-group">
									<label for="zip-code">Zip Code</label>
									<input type="text" name="simpUser_ZipCode" class="form-control" id="zip-code" value="<?=$simpZipCode; ?>">
								</div>
								<!-- Submit button -->
								<button class="btn btn-transparent" type="submit" id="sipmUser_UpdateProfileBTN">Save My Changes</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Edit Password</h3>
						<form action="#" id="sipmUser_UpdatePassword">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Current Password</label>
								<input type="password" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">New Password</label>
								<input type="password" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirm New Password</label>
								<input type="password" class="form-control" id="confirm-password">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent" type="submit" id="sipmUser_UpdatePasswordBTN">Change Password</button>
						</form>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Edit Email Address</h3>
						<form action="#" id="sipmUser_UpdateEmail">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-email">Current Email</label>
								<input type="email" class="form-control" id="current-email">
							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="new-email">New email</label>
								<input type="email" class="form-control" id="new-email">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent" id="sipmUser_UpdateEmailBTN">Change email</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include '../partial/footer.php' ?>

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
<script src="../plugins/jquery-nice-select/js/jquery.js"></script>
<script src="../plugins/jquery-nice-select/js/sweetAlert.js"></script>
<!-- google map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> -->
<script src="../plugins/google-map/map.js" defer></script>
<script src="../js/script.js"></script>
<Script>
	$(document).ready(function(){
		$("#sipmUser_UpdateProfile").submit(function(e){
			e.preventDefault()

			$.ajax({
				url:'../controller/process.php',
				method:'POST',
				processData: false,
				contentType: false,
				cache:false,
				data: new FormData(this),
				success: function(response){
					console.log(response)

					Swal.fire({
                        icon:'success',
                        text:'profile updated ',
                        title:'Updated'
                    }).then(
						location.reload()
					)
				}

			})
		})
	})
</Script>
</body>


</html>
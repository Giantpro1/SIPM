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
  <!-- <link rel="stylesheet" href="../css/Sval.css"> -->
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
											<li><a class="dropdown-item" href="index">Submenu 01</a></li>
											<li><a class="dropdown-item" href="index">Submenu 02</a></li>
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

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Register Now</h3>
          <form action="#" id="simp_Register">
            <fieldset class="p-4">
              <p class="bg-danger text-white" id="passError"></p>
              <input class="form-control mb-3" name="simp_UserName" type="text" placeholder="Username*" required>
              <input class="form-control mb-3" name="simpUser_Email" type="email" placeholder="Email*" required>
                  <input class="form-control mb-3" id="simpUser_Password_val"  name="simpUser_Password" type="password" placeholder="Password*" required>
                  <p class="bg-danger text-white" id="password_Strength_Status"></p>
                <input class="form-control mb-3" id="simpUser_Password_con" type="password" placeholder="Confirm Password*" required>
              <div class="loggedin-forgot d-inline-flex my-3">
                <input type="checkbox" id="registering" class="mt-1">
                <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition">Terms & Conditions</a></label>

                
              </div>
              <div class="d-flex justify-content-center md">
                 <button id="simp_Register_Btn" type="submit" class="btn btn-primary font-weight-bold mt-3">Register Now</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
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
            <a href="index">
              <!-- Icon -->
              <img src="../images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="../ndex"><img src="../images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="../ndex" class=" ml-3"><img src="../images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
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
            </script>. Designed & Developed by <a class="text-white" href="#">Sharkzy Innovation</a></p>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com"></a></li>
          <li><a class="fa fa-github-alt" href="https://www.github.com/Giantpro1"></a></li>
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
<script src="../plugins/jquery-nice-select/js/jquery.js"></script>
<script src="../plugins/jquery-nice-select/js/sweetAlert.js"></script>
<script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../plugins/google-map/map.js" defer></script>
<script src="../js/script.js"></script>
<script>
  $(document).ready(function(){
    $("#simp_Register_Btn").click(function(error){
      if($("#simp_Register")[0].checkValidity()){
        error.preventDefault();
        $("#simp_Register_Btn").text("please Wait...");
          if($("#simpUser_Password_val").val() != $("#simpUser_Password_con").val()){
            swal.fire({
              title: 'Oops!',
              icon: 'error',
              text: 'password does not match!!!'
            }).then(
              $("#simp_Register")[0].reset()
            )
              $("#simp_Register_Btn").val("Register")
          }else{
            $("#passError").html("");
  
            $.ajax({
              url: "../controller/action.php",
              method: "POST",
              data: $("#simp_Register").serialize() + "&action=simp_Reg",
              success:function(response){
                // console.log(response)
                if(response === "Register"){
                  window.location = "../index";
                }else if(response === "E-Mail already Exists!!!"){
                  swal.fire({
                    title: 'Oops!',
                    icon: 'error',
                    text: 'E-Mail already Exists!!!'
                  })
                }else if(response === "UserName already Exists!!!"){
                  swal.fire({
                    title: 'Oops!',
                    icon: 'error',
                    text: 'UserName already Exists!!!'
                  })
                }else if(response === "password must consist of lowercase, uppercase, special characters and must be 8 characters long"){
                  swal.fire({
                    title: 'Hoo!',
                    icon: 'warning',
                    text: 'password must consist of lowercase, uppercase, special characters and must be 8 characters long'
                  })
                }else{

                }
              }
            });
          }
        // }
        
         
      }
    });
  });
</script>

</body>

</html>
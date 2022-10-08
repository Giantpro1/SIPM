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
							<li class="nav-item dropdown dropdown-slide active">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item activePage" href="dashboard">Dashboard</a></li>
									<li><a class="dropdown-item activeMyAds" href="dashboard-my-ads">Dashboard My Ads</a></li>
									<li><a class="dropdown-item activeFavouriteAds" href="dashboard-favourite-ads">Dashboard Favourite Ads</a></li>
									<li><a class="dropdown-item activeArchivedAds" href="dashboard-archived-ads">Dashboard Archived Ads</a></li>
									<li><a class="dropdown-item active" href="dashboard-pending-ads">Dashboard Pending Ads</a></li>
									
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
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-lg-4">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile shadow">
						<!-- User Image -->
						<div class="profile-thumb">
						<?php if(!$simpUser_ProPic):?>
							<img src="../images/user/user-thumb.jpg" alt="" class="rounded-circle">
							<?php else: ?>
							<img src="<?='../controller/'.$simpUser_ProPic; ?>" class="rounded-circle" >
							<?php endif; ?>
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?=$simpUserName; ?></h5>
						<p>Joined <?= date('F d,Y', strtotime($simpUserRegDate)); ?></p>
						<a href="user-profile" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu shadow">
						<ul>
							<li><a href="dashboard-my-ads"><i class="fa fa-user"></i> My Ads <span id="showAll"></span></a></li>
							<li>
								<a href="dashboard-favourite-ads"><i class="fa fa-bookmark-o"></i> Verified Ads <span id="showVerify"></span></a>
							</li>
							<li>
								<a href="dashboard-archived-ads"><i class="fa fa-file-archive-o"></i>Disapproved Ads <span id="showDis"></span></a>
							</li>
							<li class="active">
								<a href="dashboard-pending-ads"><i class="fa fa-bolt"></i> Pending Approval<span id="showPend"></span></a>
							</li>
							<li>
								<a href="logout"><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="#!" data-toggle="modal" class="deleteaccount" id="<?=$simp_Cid;?>" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>

					<!-- delete-account modal -->
					<!-- delete account popup modal start-->
<!-- Modal -->
		<!-- <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header border-bottom-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<img src="../images/account/Account1.png" class="img-fluid mb-2" alt="">
				<h6 class="py-2">Are you sure you want to delete your account?</h6>
				<p>Do you really want to delete these records? This process cannot be undone.</p>
				<textarea class="form-control" name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
			</div>
			<div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
			</div>
		</div>
		</div> -->
<!-- delete account popup modal end-->
					<!-- delete-account modal -->
				</div>
			</div>
			<div class="col-lg-8">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist shadow">
					<h3 class="widget-header">My Ads</h3>
          <input type="hidden" class="status" id="<?=$simpUserStatus;?>"></input>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody id="displayPendingAds">

								
						</tbody>
					</table>

				</div>

				            <!-- edit pending ads modal -->

		<div id="editSimpUserPend_Ad" class="modal fade editSimpUSerAd" role="dialog" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <div class="modal-body">
                    <h4> Edit Ads here</h4>
                    <section class="advt-post bg-gray py-5">
                        <div class="container">
                          <form id ="simpUserAds_Update" action="" enctype="multipart/form-data">
                            <!-- Post Your ad start -->
                            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                              <div class="row">
                                <div class="col-lg-12">
                                  <h3>Post Your ad</h3>
                                </div>
                                <div class="col-lg-6">
                                  <input type="hidden" name="sipmuser_PostId" id="adsPostId">
                                  <h6 class="font-weight-bold pt-4 pb-1">Title Of Ad:</h6>
                                  <input type="text" name="simpUser_AdsTitle" id="adsTitle" class="form-control bg-white" placeholder="Ad title go There" required>
                                  <h6 class="font-weight-bold pt-4 pb-1">Ad Type:</h6>
                                  <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white">
                                      <input type="radio" name="sipmUser_AdsType" id="adsType" value="personal" id="personal" required>
                                      <label for="personal" class="py-2">Personal</label>
                                    </div>
                                    <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                                      <input type="radio" name="sipmUser_AdsType" id="adsType_" value="business" id="business" required>
                                      <label for="business" class="py-2">Business</label>
                                    </div>
                                  </div>
                                  <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                                  <textarea name="sipmUser_AdsDescripion" id="adsDescription" class="form-control bg-white" rows="7"
                                    placeholder="Write details about your product" required></textarea>
                                </div>
                                <div class="col-lg-6">
                                  <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                                  <select name="sipmUser_AdsCategory" id="adsCategory" class="form-control w-100 bg-white" id="inputGroupSelect">
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
                                        <input type="text" name="sipmUser_AdsPrice" id="adsPrice" class="form-control bg-white" placeholder="Price" id="price">
                                      </div>
                                      <div class="col-lg-4 ml-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                                        <input type="radio" id="adsNegotiaion" name="sipmUser_AdsNegotiation" value="Negotiable" id="Negotiable">
                                        <label for="Negotiable" class="py-2">Negotiable</label>
                                      </div>
                                      <div class="col-lg-4 ml-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                                        <input type="radio" id="adsNegotiaion_"  name="sipmUser_AdsNegotiation" value="Not Negotiable" id="Negotiable">
                                        <label for="Negotiable" class="py-2">Not Negotiable</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="choose-file text-center my-4 py-4 rounded bg-white">
                                    <label for="file-upload">
                                      <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                      <span class="d-block">or</span>
                                      <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                                      <span class="d-block">Maximum upload file size: 5MB</span>
                                      <input type="file" class="form-control-file d-none" id="file-upload" multiple name="simpUser_AdsImgUpdates[]">
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
                                  <input type="text" name="sipmUser_AdsContactName" id="adsPosterName" placeholder="Contact name" class="form-control bg-white" required>
                                  <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                                  <input type="text" name="sipmUser_AdsContactNumber" id="adsPosterNumber" placeholder="Contact Number" class="form-control bg-white" required>
                                </div>
                                <div class="col-lg-6">
                                  <h6 class="font-weight-bold pt-4 pb-1">Contact Email:</h6>
                                  <input type="email" name="sipmUser_AdsContactEmail" id="adsPosterEmail" placeholder="name@yourmail.com" class="form-control bg-white" required>
                                  <h6 class="font-weight-bold pt-4 pb-1">Contact Address:</h6>
                                  <input type="text" name="sipmUser_AdsContactAddress" id="adsPosterAddress" placeholder="Your address" class="form-control bg-white" required>
                                </div>
                              </div>
                            </fieldset>
                            <div class="checkbox d-inline-flex">
                              <input type="checkbox" id="terms-&-condition" class="mt-1">
                              <label for="terms-&-condition" class="ml-2">By click you must agree with our
                                <span> <a class="text-success" href="terms-condition">Terms & Condition and Posting
                                    Rules.</a></span>
                              </label>
                            </div>
                            <button id="simpUserAds_UpdateBtn" type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
                          </form>
                        </div>
                      </section>
                  </div>
                </div>
              </div>
            </div>
				
				<!-- pagination -->
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="dashboard-pending-ads" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="dashboard-pending-ads">1</a></li>
							<li class="page-item active"><a class="page-link" href="dashboard-pending-ads">2</a></li>
							<li class="page-item"><a class="page-link" href="dashboard-pending-ads">3</a></li>
							<li class="page-item">
								<a class="page-link" href="dashboard-pending-ads" aria-label="Next">
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
		<!-- Row End -->
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
<script src="../plugins/jquery-nice-select/js/sweetAlert.js"></script>
<!-- <script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script> -->
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../plugins/google-map/map.js" defer></script>

<script src="../js/script.js"></script>
<script src="../js/pendingAds.js"></script>
<script src="../js/pagination.js"></script>

</body>

</html>
<?php include '../controller/session.php'; 

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
                       <?php 
                       if(isset($_GET['id']))
                           $userInfo = $ibc->viewAllUSerInfo($_GET['id'], 1);
                           foreach($userInfo as $userInfos):
                       
                       ?> 
						<div class="profile-thumb">
							<img src="<?= $userInfos['sipmUser_ProfileImg'] ?>" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?=$userInfos['sipmUser_FirstName']; ?><span><?=$userInfos['sipmUser_SecondName'] ?></span></h5>
						<p>Joined <?= date('F d,Y', strtotime($userInfos['simpUserReg_Date'])); ?></p>
					</div>
					<!-- Dashboard Links -->
                       <?php endforeach; ?>

				</div>
			</div>
			<div class="col-lg-8">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist shadow">
					<h3 class="widget-header">Verified Ads</h3>
					<input type="hidden" class="status" id=""></input>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody id="">
              <?php 
              if(isset($_GET['id'])){
                $getAllUSerAds = $ibc->viewAllUserAdsD($_GET['id'], 1);
              //  echo json_encode($getAllUSerAds);
                $output = '';
                if($getAllUSerAds){
                    foreach($getAllUSerAds as $getAllUSerAd){
                        $getAllUSerAdsImg = $ibc->getVerifiedAdsImg($getAllUSerAd['sipmuser_PostId'], 1);
                        if($getAllUSerAdsImg){
                            foreach($getAllUSerAdsImg as $getAllUSerAdImg){
                              
                            }
                        }
                      }
                    }
                  }
                    
                    ?>
                    <tr>
                    <td class="product-thumb">
                    <img width="80px" height="auto" src="<?=$getAllUSerAdImg['simpUser_AdsImg'] ?>" alt="image description"></td>
                    <td class="product-details">
                        <h3 class="title"><?=$getAllUSerAd['simpUser_AdsTitle'] ?></h3>
                        <span class="add-id"><strong>Ads Product Price:</strong><?=$getAllUSerAd['sipmUser_AdsPrice'] ?></span>
                        <span><strong>Posted on: </strong><time></time> </span>
                        <span class="status active"><strong>Status</strong>Active</span>
                        <span class="location"><strong>Location</strong></span>
                    </td>
                    <td class="product-category"><span class="categories"></span></td>
                    <td class="action" data-title="Action">
                        <div class="">
                            <ul class="list-inline justify-content-center">
                                <li class="list-inline-item">
                                    <a data-toggle="modal" data-placement="top" data-target="#viewVerifyModal" id="" title="View" class="view viewSimpUserVerifyAd" href="">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a data-toggle="tooltip" data-placement="top" id="" title="Delete" class="delete " href="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
						</tbody>
					</table>

				</div>

				<!-- pagination -->
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
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


        <!-- modal for view -->
        <div id="viewVerifyModal" class="modal fade viewSimpUserVerifyAd" role="dialog" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <div class="modal-body">
                  <h3 class="d-flex justify-content-center text-info"> View Ads here</h3>
                  <h4 class="text-info">Img Ads</h4>
                    <div id="v_AdsImgs">

                    </div>
                    
                    <h4>Ads Details</h4>
                    <p class="text-dark text-weight"> Ads Title:<span class="text-primary" id="v_AdsTitle"> </span></p>
                    <p class="text-dark text-weight"> Ads Category:<span class="text-primary" id="v_AdsCategory"> </span></p>
                    <p class="text-dark text-weight"> Ads Description: <span class="text-primary" id="v_AdsDescription"> </span></p>
                    <p class="text-dark text-weight"> Ads Type:<span class="text-primary" id="v_AdsType"> </span></p>
                    <p class="text-dark text-weight"> Ads Product Price:<span class="text-primary" id="v_AdsProductPrices"> </span></p>
                    <p class="text-dark text-weight"> Ads Poster Address:<span class="text-primary" id="v_AdsAdress"> </span></p>
                    <p class="text-dark text-weight"> Ads Poster Email:<span class="text-primary" id="v_AdsEmail"> </span></p>
                    <p class="text-dark text-weight"> Ads Poster Name:<span class="text-primary" id="v_AdsPosterName"> </span></p>
                    <p class="text-dark text-weight"> Ads Poster Number:<span class="text-primary" id="v_AdsNum"> </span></p>
                  </div>
                </div>
              </div>
            </div>
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
            <a href="index">
              <!-- Icon -->
              <img src="../images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="index"><img src="../images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="index" class=" ml-3"><img src="../images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
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
            </script>. Designed & Developed by <a class="text-white" href="https://">Themefisher</a></p>
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
<script src="../js/sweetAlert.js"></script>

</body>

</html>
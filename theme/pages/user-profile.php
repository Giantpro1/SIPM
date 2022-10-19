
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
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="../index" title="home">Home <i class="fa fa-home"></i></a>
								</li>
								<li><a class="dropdown-item @@package" href="./package" title="package">Package <i class="fa fa-gift"></i></a></li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="./user-profile" title="profile"><i class="fa fa-user fa-lg"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="./ad-listing"><i
											class="fa fa-plus-circle"></i> Add Listing</a>
								</li>
							</ul>
						</div>
					</nav>			</div>
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
					<div class="widget user shadow">
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
          <div class="widget user-dashboard-menu shadow">
            <ul>
              <li><a href="./dashboard">Savings Dashboard</a></li>
              <li><a href="#">Saved Offer <span>(5)</span></a></li>
              <li><a href="#">Favourite Stores <span>(3)</span></a></li>
              <li><a href="#">Recommended</a></li>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8 ">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message shadow">
					<h2>Edit profile</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info shadow">
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
					<div class="widget change-password shadow">
						<h3 class="widget-header user">Edit Password</h3>
						<form action="" id="sipmUser_UpdatePassword">
							<p class="passError text-danger"></p>
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Current Password</label>
								<input type="password" name="profilePassword" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">New Password</label>
								<input type="password" name="newSimpUser_Pass" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirm New Password</label>
								<input type="password" name="conNewSimp_Pass" class="form-control" id="confirm-password">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent" type="submit" id="sipmUser_UpdatePasswordBTN">Change Password</button>
						</form>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0 shadow">
						<h3 class="widget-header user">Edit Email Address</h3>
						<form action="#" id="sipmUser_UpdateEmail">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-email">Current Email</label>
								<input type="email" name="simp_UserCurEmail" class="form-control" id="current-email">
							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="new-email">New email</label>
								<input type="email" name="simp_UserNewEmail" class="form-control" id="new-email">
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
					// console.log(response)
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
<!--  change-password -->
			<script>
			$("#sipmUser_UpdatePasswordBTN").click(function(e){
				if($("#sipmUser_UpdatePassword")[0].checkValidity()){
					e.preventDefault()
					$("#sipmUser_UpdatePasswordBTN").text('PleaseWait...')
					if($("#newSimpUser_Pass").val() != $("#conNewSimp_Pass").val()){
						$(".passError").text('password did not match')
					}else{
						$.ajax({
							url: '../controller/process.php',
							method: 'POST',
							data: $("#sipmUser_UpdatePassword").serialize()+'&action=change_Pass',
							success: function(response){
								// console.log(response)
								if(response == 'password did not match'){
									swal.fire({
										title: 'Oops!',
										text: 'password did not match',
										icon: 'error'
									})
									$('#sipmUser_UpdatePassword')[0].reset()
								}else if(response == 'password must consist of lowercase, uppercase, special characters and must be 8 characters long'){
									swal.fire({
										title: 'Oops!',
										text: 'password must consist of lowercase, uppercase, special characters and must be 8 characters long',
										icon: 'error'
									})
									$('#sipmUser_UpdatePassword')[0].reset()
								}else if(response == 'current passeword is not correct'){
									swal.fire({
										title: 'Oops!',
										text: 'current passeword is not correct',
										icon: 'error'
									})
									$('#sipmUser_UpdatePassword')[0].reset()
								}else if(response == 'some fields are empty'){
									swal.fire({
										title: 'Hoo!',
										text: 'some fields are empty',
										icon: 'warning'
									})
									$('#sipmUser_UpdatePassword')[0].reset()
								}else if(response == 'password change successfully'){
									swal.fire({
										title: 'Done',
										text: 'password change successfully',
										icon: 'success'
									})
									$('#sipmUser_UpdatePassword')[0].reset()
									$('#sipmUser_UpdatePasswordBTN').text('Password Updated')
								}else{

								}
										
							}
						})
					}
				}
			})
			</script>
		 <!-- change Email -->

		 <script>
			$("#sipmUser_UpdateEmailBTN").click(function(e){
				if($("#sipmUser_UpdateEmail")[0].checkValidity()){
					e.preventDefault()
					$("#sipmUser_UpdateEmailBTN").text('pleaseWait')

					$.ajax({
						url: '../controller/process.php',
						method: 'POST',
						data: $("#sipmUser_UpdateEmail").serialize()+'&action=chang_Email',
						success: function(data){
							// console.log(data)
							if(data == 'some fields are empty!'){
								swal.fire({
										title: 'Hoo!',
										text: 'some fields are empty!',
										icon: 'warning'
									})
									$('#sipmUser_UpdateEmail')[0].reset()
							}else if(data == 'current email is not correct'){
								swal.fire({
										title: 'Oops!',
										text: 'current email is not correct',
										icon: 'error'
									})
									$('#sipmUser_UpdateEmail')[0].reset()
							}else if(data == 'Email change successFully'){
								swal.fire({
										title: 'Done',
										text: 'Email change successfully',
										icon: 'success'
									})
									$('#sipmUser_UpdateEmail')[0].reset()
								$('#sipmUser_UpdateEmailBTN').text('Email Updated')
							}else{

							}

						}
					})
				}
			})
		 </script>
</body>


</html>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>KoinTube</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

	<!--Google Font-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!--preloading-->
	<div id="preloader">
		<alt="" width="119" height="58">
			<div id="status">
				<span></span>
				<span></span>
			</div>
	</div>
	<!--end of preloading-->

	<?php include("header1.php");

	include('db/function.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: landing.php');
	}

	?>
	<!-- END | Header -->

	<div class="hero user-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>Edward kennedy’s profile</h1>
						<ul class="breadcumb">
							<li class="active"><a href="#">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span>Profile</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-single">
		<div class="container">
			<div class="row ipad-width">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="user-information">
						<div class="user-img">
							<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
							<a href="#" class="redbtn">Change avatar</a>
						</div>
						<div class="user-fav">
							<p>Account Details</p>
							<ul>
								<li class="active"><a href="userprofile.php">Profile</a></li>
								<li><a href="gallery.php">Gallery</a></li>

							</ul>
						</div>
						<div class="user-fav">
							<p>Others</p>
							<ul>
								<li><a href="#">Change password</a></li>
								<li><a href="index.php?logout='1'" style="color: red;">Log out</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="form-style-1 user-pro" action="#">
						<form action="#" class="user">
							<h4>01. Profile details</h4>
							<div class="row">
								<div class="col-md-6 form-it">
									<label>Username</label>
									<input type="text" placeholder="edwardkennedy">
								</div>
								<div class="col-md-6 form-it">
									<label>Email Address</label>
									<input type="text" placeholder="edward@kennedy.com">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-it">
									<label>First Name</label>
									<input type="text" placeholder="Edward ">
								</div>
								<div class="col-md-6 form-it">
									<label>Last Name</label>
									<input type="text" placeholder="Kennedy">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<input class="submit" type="submit" value="save">
								</div>
							</div>
						</form>
						<form action="#" class="password">
							<h4>02. Change password</h4>
							<div class="row">
								<div class="col-md-6 form-it">
									<label>Old Password</label>
									<input type="text" placeholder="**********">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-it">
									<label>New Password</label>
									<input type="text" placeholder="***************">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-it">
									<label>Confirm New Password</label>
									<input type="text" placeholder="*************** ">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<input class="submit" type="submit" value="change">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer section-->
	<?php include("footer.php") ?>
	<!-- end of footer section-->

	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/plugins2.js"></script>
	<script src="js/custom.js"></script>
</body>

<!-- userprofile14:04-->

</html>
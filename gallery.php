<?php include("header.php") ?>
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
	<link rel="icon" href="images/logo2.svg">

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
	<!-- END | Header -->

	<div class="hero user-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>Edward kennedy’s profile</h1>
						<ul class="breadcumb">
							<li class="active"><a href="#">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span>Gallery</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-single">
		<div class="container">
			<div class="row ipad-width2">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="user-information">
						<div class="user-img">
							<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
							<a href="#" class="redbtn">Change avatar</a>
						</div>
						<div class="user-fav">
							<p>Account Details</p>
							<ul>
								<li><a href="userprofile.php">Profile</a></li>
								<li class="active"><a href="gallery.php">Gallery</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="topbar-filter user">
						<p>Found <span>1,608 movies</span> in total</p>

					</div>
					<div class="flex-wrap-movielist grid-fav">
						<div class="movie-item-style-2 movie-item-style-1 style-3">
							<img src="images/uploads/mv1.jpg" alt="">
							<div class="hvr-inner">
								<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="moviesingle.html">oblivion</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
							</div>
						</div>
					</div>
					<div class="topbar-filter">
						<label>Gallery</label>

					</div>
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

<!-- userfavoritegrid13:49-->

</html>
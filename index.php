<?php include("header.php");
include('db/function.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: landing.php');
}

?>
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

	<div class="slider movie-items">
		<div class="container">
			<div class="row">
				<div class="social-link">
					<p>Follow us: </p>
					<a href="#"><i class="ion-social-facebook"></i></a>
					<a href="#"><i class="ion-social-twitter"></i></a>
					<a href="#"><i class="ion-social-googleplus"></i></a>
					<a href="#"><i class="ion-social-youtube"></i></a>
				</div>
				<div class="slick-multiItemSlider">
					<div class="movie-item">
						<div class="mv-img">
							<a href="#"><img src="images/uploads/slider1.jpg" alt="" width="285" height="437"></a>
						</div>
						<div class="title-in">
							<div class="cate">
								<span class="blue"><a href="#">Sci-fi</a></span>
							</div>
							<h6><a href="#">Interstellar</a></h6>
							<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="movie-items">
		<div class="container">
			<div class="row ipad-width">
				<div class="col-md-8">
					<div class="title-hd">
						<h2>stream</h2>
					</div>
					<div class="tabs">
						<div class="tab-content">
							<div id="tab1" class="tab active">
								<div class="row">
									<div class="slick-multiItem">
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Interstellar</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="title-hd">
						<a href="movies.php">
							<h2>see all</h2>
						</a>
					</div>
					<div class="col-md-4">
						<div class="sidebar">

							<div class="celebrities">
								<h4 class="sb-title">Spotlight Celebrities</h4>
								<div class="celeb-item">
									<a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
									<div class="celeb-author">
										<h6><a href="#">Samuel N. Jack</a></h6>
										<span>Actor</span>
									</div>
								</div>

								<a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!--end of latest new v1 section-->

	<!-- footer section-->
	<?php include("footer.php") ?>
	<!-- end of footer section-->

	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/plugins2.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
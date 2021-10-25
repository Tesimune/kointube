<?php include("header1.php") ?>
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

	<!-- END | Header -->

	<div class="hero common-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>TOP CONTENT CREATORS</h1>
						<ul class="breadcumb">
							<li class="active"><a href="#">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span> content creator</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- celebrity grid v1 section-->
	<div class="page-single">
		<div class="container">
			<div class="row ipad-width2">
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="topbar-filter">
						<p>Found <span>1,608 celebrities</span> in total</p>


					</div>
					<div class="celebrity-items">
						<div class="ceb-item">
							<a href="contentcreator.php"><img src="images/uploads/ceb1.jpg" alt=""></a>
							<div class="ceb-infor">
								<h2><a href="contentcreator.php">Tom Hardy</a></h2>
								<span>actor, usa</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-12">
					<div class="sidebar">
						<div class="searh-form">
							<h4 class="sb-title">Search celebrity</h4>
							<form class="form-style-1 celebrity-form" action="#">
								<div class="row">
									<div class="col-md-12 form-it">
										<label>Celebrity name</label>
										<input type="text" placeholder="Enter keywords">
									</div>
									<div class="col-md-12 form-it">
										<label>Celebrity Letter</label>
										<select>
											<option value="range">A</option>
											<option value="saab">B</option>
										</select>
									</div>
									<div class="col-md-12 form-it">
										<label>Category</label>
										<select>
											<option value="range">Actress</option>
											<option value="saab">Others</option>
										</select>
									</div>
									<div class="col-md-12 form-it">
										<label>Year of birth</label>
										<div class="row">
											<div class="col-md-6">
												<select>
													<option value="range">1970</option>
													<option value="number">Other</option>
												</select>
											</div>
											<div class="col-md-6">
												<select>
													<option value="range">1990</option>
													<option value="number">others</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12 ">
										<input class="submit" type="submit" value="submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--end of celebrity grid v1 section-->
	<!-- footer section-->
	<?php include("footer.php") ?>
	<!-- end of footer section-->

	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/plugins2.js"></script>
	<script src="js/custom.js"></script>
</body>

<!-- celebritygrid0111:44-->

</html>
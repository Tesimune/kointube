<?php

require_once 'DB/connect.php';

if (!isset($_SESSION['user'])) {
	header("Location: landing.php");
} else {
	$user = $_SESSION['user'];
}
?>

<!DOCTYPE html>
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

	<!-- BEGIN | Header -->
	<header class="ht-header">
		<div class="container">
			<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
					<div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<a href="index.php"><img class="logo" src="images/logo.svg" alt="" width="60px" height="40px"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a href="index.php" class="btn btn-default">
								Home <i aria-hidden="true"></i>
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
								CATEGORIES<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="movielist.html">CATEGORIES NAME</a></li>

							</ul>
						</li>
						<li>
							<a href="contentcreators1.php" class="btn btn-default dropdown-toggle lv1">
								CONTENT CREATORS
							</a>

						</li>

					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
								PAGES <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="userprofile.php">PROFILE</a></li>
								<li><a href="gallery.php">GALERY</a></li>
								<li><a href="wishlist.php">WISH LIST</a></li>
								<li><a href="404.html">ABOUT</a></li>
								<li><a href="404.html">CONTACT</a></li>
								<li class="it-last"><a href="404.html">PRIVACY POLICY</a></li>
							</ul>
						</li>
						<li><a href="404.html">FAQ</a></li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>


		</div>
	</header>
	<!-- END | Header -->
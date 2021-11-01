<?php
$streams = require_once 'DB/logic.php';
include_once "layouts/header.php";
?>

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="hero-ct">
					<h1><?php echo $user['first_name'] . ' ' . $user['last_name'] ?> </h1>
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

<?php include_once 'layouts/footer.php'; ?>
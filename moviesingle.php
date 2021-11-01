<?php
$stream = require_once 'DB/single.php';
include_once "layouts/header.php";
?>
<!-- END | Header -->

<div class="hero mv-single-hero">

</div>

<div class="page-single movie-single movie_single">

	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="<?php echo $stream['thumbnail'] ?>" alt="">
					<div class="movie-btn">
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="<?php echo $stream['trailer']; ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy to gallery</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">

				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?php echo $stream['title']; ?> <span><?php echo $stream['time']; ?></span></h1>
					<br>
					<?php echo $stream['description']; ?>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-android-star"></i> star</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span><?php echo $stream['star']; ?></span><br>

							</p>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include_once 'layouts/footer.php'; ?>
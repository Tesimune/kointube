<?php
$streams = require_once 'DB/logic.php';
include_once "layouts/header.php";
?>

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
				<?php foreach ($streams as $stream) { ?>
					<div class="movie-item">
						<div class="mv-img">
							<a href="moviesingle.php?id=<?php echo $stream['id']; ?>"><img src="<?php echo $stream['thumbnail'] ?>" alt="" width="285" height="437"></a>
						</div>
						<div class="title-in">
							<div class="cate">
								<span class="blue"><a href="moviesingle.php?id=<?php echo $stream['id']; ?>"><?php echo $stream['categories'] ?></a></span>
							</div>
							<h6><a href="#"><?php echo $stream['title'] ?></a></h6>
							<p><i class="ion-android-star"></i><span><?php echo $stream['star'] ?></span></p>
						</div>
					</div>
				<?php } ?>
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
									<?php foreach ($streams as $stream) { ?>

										<div class="movie-item">
											<div class="mv-img">
												<a href="moviesingle.php?id=<?php echo $stream['id']; ?>"><img src="<?php echo $stream['thumbnail'] ?>" alt="" width="285" height="437"></a>
												<div class="hvr-inner">
													<a href="#">View</a>
												</div>
												<div class="title-in">
													<h6><a href="#"><?php echo $stream['title'] ?></a></h6>
													<p><i class="ion-android-star"></i><span><?php echo $stream['star'] ?></span></p>
												</div>
											</div>
										</div>


									<?php } ?>
								</div>
							</div>

						</div>
					</div>
					<div class="title-hd">
						<a href="movies.php">
							<h2>see all</h2>
						</a>
					</div>


				</div>
			</div>
		</div>

	</div>

	<?php include_once 'layouts/footer.php'; ?>
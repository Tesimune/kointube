<?php
$streams = require_once 'DB/logic.php';
include_once "layouts/header.php";
?>
<!-- END | Header -->

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>stream</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Stream</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter fw">
					<p>Found <span>1,608 movies</span> in total</p>


				</div>

				<div class="flex-wrap-movielist mv-grid-fw">
					<?php foreach ($streams as $stream) { ?>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="<?php echo $stream['thumbnail'] ?>" alt="">
							<div class="hvr-inner">
								<a href="moviesingle.php?id=<?php echo $stream['id']; ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="moviesingle.php?id=<?php echo $stream['id']; ?>"><?php echo $stream['categories'] ?></a></h6>
								<p class="rate"><i class="ion-android-star"></i><span><?php echo $stream['title']; ?></span></p>
							</div>
						</div>
					<?php } ?>
				</div>

				<div class="topbar-filter">
					<label>Stream</label>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("layouts/footer.php"); ?>
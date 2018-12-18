<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Galeri Video - Sanan Tempe</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<?php 
			include 'allcss.php'
		?>
	</head>
	<body>
		<?php include 'header.php' ?>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">

						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h3><span>Video Terbaru Kami</span> </h3>
								<script src="https://apis.google.com/js/platform.js"></script>
<h3><span><div class="g-ytsubscribe" data-channelid="UCZntVxrABipwypzJgjc1beg" data-layout="full" data-count="hidden"></div></span></h3>
							</div>
						</div>
						<?php foreach($video as $v){ ?>
							<div class="col-lg-6 top-post-left" style="margin-bottom:10px;">
							<div class="feature-image-thumb relative" >
							<iframe width="600" height="300" src="https://www.youtube.com/embed/<?= $v->url_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#">Video</a></li>
								</ul>
							</div>
						</div>
						<?php } ?>
						
					</div>
		
					
				<div class="col-lg-12">
					<div class="news-tracker-wrap">
						
					</div>
				</div>
			</section>

		</div>
		
		<?php 
			include 'footer.php';
			include 'alljs.php'
		?>
		
	</body>
</html>
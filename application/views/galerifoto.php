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
		<title>Galeri Foto - Sanan Tempe</title>
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
								<h3><span>Galeri Terbaru Kami</span></h3>
							</div>
						</div>
		
						
					<?php foreach($foto as $f){ ?>	
						<div class="col-lg-4 top-post-left" style="margin-bottom:10px;">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?= $f->thumbnail_url; ?>" alt="">
							</div>
							<div class="top-post-details">
							
								<ul class="tags">
									<li><a href="#">Foto</a></li>
								</ul>
							
								<ul class="meta">
									<li>
										<a href="<?= $f->author_url; ?>"><?= substr($f->title,0,30); ?></a>
									</li>
								</ul>
							</div>
						</div>
					<?php } ?>
					</div>
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
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
		<title>Home - Sanan Tempe</title>
		<style type="text/css">
			.slider {
/*			width: 1024px;
			margin: 2em auto;*/
			
		}

		.slider-wrapper {
			width: 100%;
			height: 400px;
			position: relative;
		}

		.slide {
			float: left;
			position: absolute;
			width: 100%;
			height: 100%;
			opacity: 0;
			transition: opacity 3s linear;
		}

		.slider-wrapper > .slide:first-child {
			opacity: 1;
		}

		</style>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<?php 
			include 'allcss.php'
		?>
	</head>
	<?php $url_produk = "http://127.0.0.1/Sanan_project/Sanan_project/"; ?>
	<body>
		<?php include 'header.php' ?>
		<div class="site-main-container">
			<!-- Start info Area -->
		<section class="info-area relative pt-10">
			<div class="row align-items-center justify-content-end">
				<div class="container no-padding">
					<div class="row" style="margin:0">
						<div class="col-lg-12 no-padding info-right">	
							<div class="slider" id="main-slider"><!-- outermost container element -->
								<div class="slider-wrapper"><!-- innermost wrapper element -->
									<img src="<?php echo base_url() ?>assets/img/top-post1.jpg" alt="First" class="slide" /><!-- slides -->
									<img src="<?php echo base_url() ?>assets/img/top-post2.jpg" alt="Second" class="slide" />
									<img src="<?php echo base_url() ?>assets/img/top-post3.jpg" alt="Third" class="slide" />
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End info Area -->
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
							<iframe width="750" height="400" src="https://www.youtube.com/embed/<?= $video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#">Video</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-lg-4 top-post-right">
				
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img height="100px" class="img-fluid" src="<?= $foto->thumbnail_url; ?>" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<li><a href="#">Foto</a></li>
									</ul>
									<a href="#">
										<h4><?= substr($foto->title,0,30); ?></h4>
									</a>
								</div>
							</div>
	
						</div>
						<div class="col-lg-12">
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->



			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
						<div class="latest-post-wrap">
								<h4 class="cat-title">Berita Terbaru</h4>
								<?php foreach($berita as $r){ ?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo base_url() ?>assets/img/berita/<?= $r->foto_berita; ?>" alt="">
										</div>
										<ul class="tags">
											<li><a href="#">Berita</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?= site_url() ?>/post/detail/<?= $r->id_berita; ?>">
											<h4><?= $r->judul_berita; ?></h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?= $r->nama_admin; ?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $r->tanggal_berita; ?></a></li>
										
										</ul>
										<p class="excert">
											<?= substr($r->isi_berita,0,100); ?>
										</p>
									</div>
								</div>
							<?php } ?>
						</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/banner-ad.jpg" alt="">
							</div>
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Dokumen Kami</h4>
						
							</div>
							<!-- End popular-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Produk Kami</h6>
									<div class="editors-pick-post">
										<?php foreach($produklast as $p){ ?>
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo $url_produk ?>assets/images/produk/<?= $p->foto1; ?>" alt="Produk Sanan">
											</div>
											<ul class="tags">
												<li><a href="#">Produk</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="<?=$url_produk ?>index.php/detail/id/<?= $p->id_produk; ?>">
												<h4 class="mt-20"><?= $p->nama_produk; ?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-cart"></span>Stok : <?= $p->stok_produk; ?></a></li>
												<li><a href="#"><span class="lnr lnr-cart"></span>Rp. <?= $p->harga_produk; ?></a></li>
											</ul>
										</div>
										<?php } ?>
										<div class="post-lists">
										<?php foreach($produk as $p){ ?>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?php echo $url_produk ?>assets/images/produk/<?= $p->foto1; ?>" alt="Produk Sanan">
												</div>
												<div class="detail">
													<a href="<?=$url_produk ?>index.php/detail/id/<?= $p->id_produk; ?>"><h6><?= $p->nama_produk; ?></h6></a>
													<ul class="meta">
												<li><a href="#"><span class="lnr lnr-cart"></span>Stok : <?= $p->stok_produk; ?></a></li>
												<li><a href="#"><span class="lnr lnr-cart"></span>Rp. <?= $p->harga_produk; ?></a></li>
											</ul>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/img/sidebar-ads.jpg" alt="">
								</div>
								<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Temukan Kami</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
												<p>983 Likes</p>
											</div>
											<a href="#">Like our page</a>
										</li>
										<li class="d-flex justify-content-between align-items-center tw">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-twitter" aria-hidden="true"></i>
												<p>983 Followers</p>
											</div>
											<a href="#">Follow Us</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
												<p>983 Subscriber</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
										<li class="d-flex justify-content-between align-items-center rs">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-rss" aria-hidden="true"></i>
												<p>983 Subscribe</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
		<script type="text/javascript">
			(function() {
	
			function Slideshow( element ) {
				this.el = document.querySelector( element );
				this.init();
			}
			
			Slideshow.prototype = {
				init: function() {
					this.wrapper = this.el.querySelector( ".slider-wrapper" );
					this.slides = this.el.querySelectorAll( ".slide" );
					this.previous = this.el.querySelector( ".slider-previous" );
					this.next = this.el.querySelector( ".slider-next" );
					this.index = 0;
					this.total = this.slides.length;
					this.timer = null;
					this.action();
					this.stopStart();	
				},
				_slideTo: function( slide ) {
					var currentSlide = this.slides[slide];
					currentSlide.style.opacity = 1;
					for( var i = 0; i < this.slides.length; i++ ) {
						var slide = this.slides[i];
						if( slide !== currentSlide ) {
							slide.style.opacity = 0;
						}
					}
				},
				action: function() {
					var self = this;
					self.timer = setInterval(function() {
						self.index++;
						if( self.index == self.slides.length ) {
							self.index = 0;
						}
						self._slideTo( self.index );
					}, 3000);
				},
				stopStart: function() {
					var self = this;
					self.el.addEventListener( "mouseover", function() {
						clearInterval( self.timer );
						self.timer = null;
					}, false);
					self.el.addEventListener( "mouseout", function() {
						self.action();
					}, false);
				}
			};
			document.addEventListener( "DOMContentLoaded", function() {
				var slider = new Slideshow( "#main-slider" );
			});	
		})();
				</script>
		<?php 
			include 'footer.php';
			include 'alljs.php'
		?>
		
	</body>
</html>
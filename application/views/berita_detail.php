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
		<title>Post Image - Sanan Tempe</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<?php include 'allcss.php' ?>
	</head>
	<?php $url_produk = "http://127.0.0.1/Sanan_project/Sanan_project/"; ?>
	<body>
		<?php include 'header.php' ?>
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Image Post</h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span class="lnr lnr-arrow-right"></span><a href="image-post.html">Image Post </a></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
	<?php foreach($beritaid as $b){
		$id_berita = $b->id_berita; 
		?>
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									
									<img class="img-fluid" src="<?php echo base_url() ?>assets/img/berita/<?= $b->foto_berita; ?>" alt="Foto Sanan">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a href="#">Berita</a></li>
									</ul>
									<a href="#">
										<h3><?= $b->judul_berita; ?></h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span><?= $b->nama_admin; ?></a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $b->tanggal_berita; ?></a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span><?= $jumlahkomentar; ?> </a></li>
									</ul>
									<p>
									<?= $b->isi_berita; ?>
									</p>
							
								<div class="navigation-wrap justify-content-between d-flex">
									<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Sebelumnya</a>
									<a class="next" href="#">Selanjutnya<span class="lnr lnr-arrow-right"></span></a>
								</div>
								
								<div class="comment-sec-area">
									<div class="container">
										<div class="row flex-column">
											<h6><?= $jumlahkomentar; ?> Komentar</h6>
											<?php foreach($komentar as $k){ ?>
											<div class="comment-list">
												<div class="single-comment justify-content-between d-flex">
													<div class="user justify-content-between d-flex">
														<div class="thumb">
															<img height="85" width="60" src="<?php echo base_url() ?>assets/img/user.png" alt="">
														</div>
														<div class="desc">
															<h5><a href="#"><?= $k->nama; ?></a></h5>
															<p class="date"><?= $k->tanggal; ?></p>
															<p class="comment">
																<?= $k->isi; ?>
															</p>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="comment-form">
								<h4>Post Comment</h4>
								<?= form_open('Post/komentar'); ?>
									<div class="form-group form-inline">
										<div class="form-group col-lg-6 col-md-12 name">
											<input type="hidden" value="<?= $id_berita; ?>" name="id_berita" >
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
										</div>
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="isi" placeholder="Isi Komentar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<input type="submit" class="primary-btn text-uppercase" value="Post Comment">
								<?= form_close(); ?>
							</div>
						</div>
						<!-- End single-post Area -->
					<?php } ?>
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
						<div class="single-sidebar-widget most-popular-widget">
								<h6 class="title">Berita Lainnya</h6>
								<?php foreach($berita as $r){ ?>
								<div class="single-list flex-row d-flex">
									<div class="thumb">
										<img height="200" width="300" src="<?php echo base_url() ?>assets/img/berita/<?= $r->foto_berita; ?>" alt="">
									</div>
								</div>
									<div class="details">
									<a href="<?= site_url() ?>/post/detail/<?= $r->id_berita; ?>">
											<h6><?= $r->judul_berita; ?></h6>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $r->tanggal_berita; ?></a></li>
										</ul>
									</div>
									<?php } ?>
								</div>
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
	</div>
	<?php include 'footer.php' ?>
	<?php include 'alljs.php' ?>
</body>
</html>
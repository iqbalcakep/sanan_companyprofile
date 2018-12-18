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
		<title>Contact Us - Sanan Tempe</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<?php include 'allcss.php' ?>
	</head>
	<body>
		<?php include 'header.php' ?>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Silahkan Hubungi Kami </h1>
								<p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Hubungi Kami</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start contact-page Area -->
			<section class="contact-page-area pt-50 pb-120">
				<div class="container">
				<?php if($this->session->flashdata('msg')){ print_r($this->session->flashdata('msg')); }?>
					<div class="row contact-wrap">
					
						<div class="col-lg-3 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								

								<div class="contact-details">
									<h5>Malang, Indonesia</h5>
									<p>
										Jl Gak tau
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>0823647589</h5>
									<p>Setiap hari 07.00 - 21.00</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>admin@sanantempe.com</h5>
									<p>Kirim keluhan Anda</p>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<?php echo form_open('contact/kirim_email'); ?>
							
								<div class="row">
									<div class="col-lg-6">
										<input name="nama" placeholder="Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="email" placeholder="Email Anda" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
										<input name="subjek" placeholder="Subjek Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6">
										<textarea class="common-textarea form-control" name="pesan" placeholder="Masukkan Pesan Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
									</div>
									<div class="col-lg-12">
						
										<input name="kirim" type="submit" class="primary-btn primary" style="float: right;" value="Kirim Pesan">
									</div>
								</div>
						
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
		</div>
		<?php include 'footer.php' ?>
		<?php include 'alljs.php' ?>
	</body>
</html>
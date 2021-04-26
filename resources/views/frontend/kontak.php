<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>Kontak | BANK BKC</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="img/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/cubeportfolio.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/magnific-popup.min.css">
		<link rel="stylesheet" href="css/owl-carousel.min.css">
		<link rel="stylesheet" href="css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<?php include('top_header.php'); ?>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="index.php">
													<img src="img/logo.png" alt="#"></a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="#">Tentang Kami</a>
																	<?php include('menu_tentangkami.php'); ?>
																</li>
																<li><a href="#">Produk &amp; Layanan</a>
																	<?php include('menu_produk&layanan.php'); ?>
																</li>
																<li><a href="404.html">Kabar</a></li>
																<li><a href="404.html">Edukasi</a></li>
																<li><a href="#">Laporan</a>
																	<?php include('menu_laporan.php'); ?>
																</li>
																<li><a href="404.html">Galeri</a></li>
																<li class="active"><a href="kontak.php">Kontak</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			
			<!-- Popup -->
			<?php include('popup_menu.php'); ?>
			<!-- Tutup Popup -->
			
		</header>
		<!--/ End Header -->
		
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image: url(img/1600x500.png)">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">Kontak</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Informasi</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Hubungi Kami</h4>
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="first_name" placeholder="Nama Lengkap">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Nama Panggilan">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Subjek">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-phone"></i></div>
											<input type="text" name="subject" placeholder="No. Handphone">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<div align="Left">
												<button type="submit" class="bizwheel-btn theme-2">Kirim</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								<h2>Kontak Langsung</h2>
								<p>Dengan senang hati kami menyambut pertanyaan, komentar, dan masukan yang akan membuat kami memeberikan pelayanan yang lebih baik.</p>
							</div>

							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<h4>Jam Operasional</h4>
									<p>Senin - Jum'at<br>08:00 - 15:00 WIB (Setiap hari)</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>BKC Call Center</h4>
									<p>Tel. : +62 231-661906<br> Mob. : 765 654 3451</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Layanan</h4>
									<p>info@bankbkc.co.id<br>customercare@bankbkc.co.id</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Contact Us -->
		
		<!-- Footer -->
		<?php include('footer.php'); ?>
		
		<!-- Jquery JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="js/active.js"></script>
	</body>
</html>
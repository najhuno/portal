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
		<title>BANK BKC | PERUMDA BPR Kabupaten Cirebon</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png') }}" href="img/favicon.png') }}">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
			


		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/cubeportfolio.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.min.css') }}">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
		

		{{-- style css  --}}
	
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
	
		<!-- Bizwheel Colors -->
		{{-- <!--<link rel="stylesheet" href="{{ asset('assets/frontend/css/skins/skin-1.css') }}">-->
		<!--<link rel="stylesheet" href="{{ asset('assets/frontend/css/skins/skin-2.css') }}">-->
		<!--<link rel="stylesheet" href="{{ asset('assets/frontend/css/skins/skin-3.css') }}">-->
		<!--<link rel="stylesheet" href="{{ asset('assets/frontend/css/skins/skin-4.css') }}">--> --}}
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
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
			@include('frontend.layout.top_header')
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
													<img src="{{ asset('assets/frontend/img/logo.png') }}" alt="#"></a>
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
																	@include('frontend.menu_tentangkami')
																</li>
																<li><a href="#">Produk &amp; Layanan</a>
																	@include('frontend.menu_produk')
																</li>
																<li><a href="404.html">Kabar</a></li>
																<li><a href="404.html">Edukasi</a></li>
																<li><a href="#">Laporan</a>
																	@include('frontend.menu_laporan')
																</li>
																<li><a href="404.html">Galeri</a></li>
																<li><a href="kontak.php">Kontak</a></li>
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
			@include('frontend.popup_menu')
			<!-- Tutup Popup -->
			
		</header>
		<!--/ End Header -->
		
		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="home-slider">

				<!-- Single Slider -->
				<div class="single-slider" style="background:url(assets/frontend/img/slide1.png)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text"> 
										<h4>Ramadhan Kareem</h4>
										<h1>Marhaban Yaa Ramadhan</h1>
										<div class="p-text">
											<p>Ramadhan, 1442 H</p>
										</div>
										<div class="button">
											<a href="jadwal_imsakiyyah_1442_h.pdf" target="_blank" class="bizwheel-btn theme-2 effect">Jadwal Imsakiyyah 1442 H.</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->

				<!-- Single Slider -->
				<div class="single-slider" style="background:url(assets/frontend/img/slide2.png)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text"></div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->

				
			</div>
		</section>
		<!--/ End Hero Slider -->
		
		<!-- About Us -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-1 col-md-6 col-12">
						<!-- About Video -->
						<div class="modern-img-feature">
							<img src="{{ asset('assets/frontend/img/800x725.png') }}" alt="#">
						</div>
						<!--/End About Video  -->
					</div>
					<div class="col-lg-5 col-md-6 col-12">
						<div class="about-content section-title default text-left">
							<div class="section-top">
								<h1><span>About Us</span><b>Profil Perusahaan</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									PERUMDA BPR Kabupaten Cirebon  adalah hasil penggabungan 12 (Dua belas) Perusahaan Daerah milik Pemerintah Kabupaten Cirebon. Penggabungan usaha (<i>Merger</i>) tersebut antara lain: <br>
									PD. BPR Sumber, PD. BPR Arjawinangun, PD. BPR Waled, PD. BPR Karangsembung, PD. BPR Palimanan, PD. BPR Plumbon, PD. BPR Lemahabang, PD. BPR Susukan, PD. BPR Weru, PD. BPR Cirebon Barat dan PD. BPR Cirebon Utara ke dalam PD. BPR Babakan.<br><br>
								</div>
								<div align="left">
									<div class="call-inner">
										<a href="about.php" class="bizwheel-btn"><i>Selengkapnya ...</i></a>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>	
		<!--/ End About Us -->
		<section class="counterup">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Counterup -->
						<div class="single-counter">
							<div class="icon"><i class="fa fa-book"></i></div>
							<div class="conter-content">
								<div class="counter-head">
									<h3><b class="number">105</b><span>K</span></h3>
								</div>
								<p>Nasabah Tabungan</p>
							</div>
						</div>
						<!--/ End Single Counterup -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Counterup -->
						<div class="single-counter">
							<div class="icon"><i class="fa fa-users"></i></div>
							<div class="conter-content">
								<div class="counter-head">
									<h3><b class="number">5999</b><span>+</span></h3>
								</div>
								<p>Nasabah Deposito</p>
							</div>
						</div>
						<!--/ End Single Counterup -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Counterup -->
						<div class="single-counter">
							<div class="icon"><i class="fa fa-life-ring"></i></div>
							<div class="conter-content">
								<div class="counter-head">
									<h3><b class="number">5988</b><span>+</span></h3>
								</div>
								<p>Nasabah Pinjaman</p>
							</div>
						</div>
						<!--/ End Single Counterup -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Counterup -->
						<div class="single-counter">
							<div class="icon"><i class="fa fa-fire"></i></div>
							<div class="conter-content">
								<div class="counter-head">
									<h3><b class="number">8569</b><span>+</span></h3>
								</div>
								<p>Nasabah Baru Setiap Bulannya</p>
							</div>
						</div>
						<!--/ End Single Counterup -->
					</div>
				</div>
			</div>
		</section>


		<!-- Features Area -->
		<section class="features-area section-bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-dollar"></i></div>
							<h4><a href="service-single.html">TAMASDA</a></h4>
							<p>Tabungan Masyarakat Daerah </p>
							
						</div>
						<!--/ End Single Feature -->
					</div>
					
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-dollar"></i></div>
							<h4><a href="service-single.html">TASIS</a></h4>
							<p>Tabungan Siswa</p>
							
						</div>
						<!--/ End Single Feature -->
					</div>
					
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-dollar"></i></div>
							<h4><a href="service-single.html">TANAS</a></h4>
							<p>Tabungan Anak Sekolah</p>
							
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-dollar"></i></div>
							<h4><a href="service-single.html">TABUNGANKU</a></h4>
							<p>Tabungan Aku</p>
							
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Features Area -->
		@include('frontend.kalkulator')
		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><span>Product</span><b>Produk &amp; Layanan</b></h1><h4>Kami memberikan layanan &amp; dukungan berkualitas</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>Fungsi bank yang utama antara lain menghimpun dan menyalurkan dana. Bank sendiri memiliki beragam produk yang memiliki banyak manfaat dan keunggulan untuk memenuhi kebutuhan finansial Anda.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="{{ asset('assets/frontend/img/produk_kredit.png') }}" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-business.html">Pinjaman (Kredit)</a></h4>
								<p>Fasilitas unggulan yang mampu memberikan keuntungan lebih kepada para debitur. Dengan suku bunga kredit ringan, proses cepat dan tepat.</p>
								<a class="btn" href="404.html"><i class="fa fa-arrow-circle-o-right"></i>Selengkapnya</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="{{ asset('assets/frontend/img/produk_tabungan.png') }}" alt="#">
								<div class="icon-bg"><i class="fa fa-money"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-develop.html">Tabungan</a></h4>
								<p>Simpnanan yang menguntungkan dengan setoran terjangkau yang memberikan kemudahan dalam bertransaksi.</p>
								<a class="btn" href="tabungan.php"><i class="fa fa-arrow-circle-o-right"></i>Selengkapnya</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="{{ asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
								<div class="icon-bg"><i class="fa fa-calendar-o"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.html">Deposito</a></h4>
								<p>Produk simpanan berjangka yang ideal dengan bunga kompetitif agar berinvestasi ditempat yang aman dan terpercaya, sekaligus menguntungkan</p>
								<a class="btn" href="deposito.php"><i class="fa fa-arrow-circle-o-right"></i>Selengkapnya</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->
		
		<!-- Call To Action -->
		@include('frontend.update_lps')
		<!--/ End Call to action -->
			
		
		<!-- Portfolio -->
		<section class="portfolio section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Reputation</span><b>Prestasi &amp; Penghargaan</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>BANK BKC berkomitmen secara konsisten mencetak kinerja yang baik</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="portfolio-main">
							<div id="portfolio-item" class="portfolio-item-active">
								<div class="cbp-item business animation">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="{{ asset('assets/frontend/img/prestasi/pa_1.png') }}" alt="#">
											<a class="more" href="#"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4>Golden Awards 2015</h4>
											<p>Infobank, 2010-2014</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>

								<div class="cbp-item seo consulting">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="{{ asset('assets/frontend/img/prestasi/pa_2.png') }}" alt="#">
											<a class="more" href="#"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Golden Awards 2016</a></h4>
											<p>Infobank, 2011-2015</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>

								<div class="cbp-item marketing seo">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="{{ asset('assets/frontend/img/prestasi/pa_3.png') }}" alt="#">
											<a class="more" href="#"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4>Golden Awards 2017</h4>
											<p>Infobank, 2012-2016</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br>
								<div align="center">
									<div class="col-lg-9 col-12">
										<div class="call-inner">
											<a href="prestasi.php" class="bizwheel-btn">Selengkapnya</a>
										</div>
									</div>
								</div>	
		</section>
		<!--/ End Portfolio -->

										
		
		<!-- Testimonials -->
		<section class="testimonials section-space" style="background-image:url(img/1500x700.png)">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
							<div class="section-top">
								<h1><b>Kata Mereka, Tentang Kami</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text"><p>Beberapa klien hebat kami dan komentar mereka</p></div>
							</div>
						</div>
						<div class="testimonial-inner">
							<div class="testimonial-slider">
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p>Saya sangat bersyukur dengan<strong>BANK BKC</strong> yang telah membantu realisasi kredit saya untuk membayar biaya Rumah Sakit.</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Yanto Sahroni <span>Karyawan Swasta</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p><strong>BANK BKC</strong> Memberikan memberikan saya modal usaha sehingga saya bisa membangun usaha sendiri dengan pencairan pinjaman yang cepat.</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Wasnira <span>Owner, Warung Sembako</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p>Bunga Deposito sangat kompetitif, pegawainya sudah banyak, ramah-ramah dan prosesnya cepat serta bunganya bersaing lo. Gak bakal nyesel deh jadi nasabah di sini.</p>	
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Rohidah <span>Deposan, Gebang</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Call To Action -->
		<section class="call-action overlay" style="background-image: url(img/banner1.png)">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2>Terdaftar dan diawasi oleh <br>Otoritas Jasa Keuangan (OJK)</h2>
							<p>Kegiatan operasional perusahaan pinjaman diawasi dan harus sesuai dengan ketentuan<br>yang ditetapkan oleh OJK</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Latest Blog -->
		<section class="latest-blog section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Latest</span><b> Kabar Terkini</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>Sementara belum ada kabar. Segera kami upload kabar terbaru secara tajam dan terpercaya</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="404.html">We Provide you Best &amp; Creative News Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>April 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="404.html">We Provide you Best &amp; Creative News Update</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>Desember 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="404.html">We Provide you Best &amp; Creative News Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>Januari 2021</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="404.html">We Provide you Best &amp; Creative News Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>Februari 2021</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->
		
		
		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-1.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-2.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-3.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-4.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-5.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-6.png') }}" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->
		
		<!-- Footer -->
		@include('frontend.layout.footer')
		
		<!-- Jquery JS -->
		<script src="{{asset('assets/frontend/js/jquery.min.js') }}"></script>
		<script src="{{asset('assets/frontend/js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
		<!-- Modernizr JS -->
		<script src="{{asset('assets/frontend/js/modernizr.min.js') }}"></script>
		<!-- ScrollUp JS -->
		<script src="{{asset('assets/frontend/js/scrollup.js') }}"></script>
		<!-- FacnyBox JS -->
		<script src="{{asset('assets/frontend/js/jquery-fancybox.min.js') }}"></script>
		<!-- Cube Portfolio JS -->
		<script src="{{asset('assets/frontend/js/cubeportfolio.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{asset('assets/frontend/js/slicknav.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{asset('assets/frontend/js/slicknav.min.js') }}"></script>
		<!-- Slick Slider JS -->
		<script src="{{asset('assets/frontend/js/owl-carousel.min.js') }}"></script>
		<!-- Easing JS -->
		<script src="{{asset('assets/frontend/js/easing.js') }}"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
		<!-- Active JS -->
		<script src="{{asset('assets/frontend/js/active.js') }}"></script>

		<script>
			function setPeriodeKredit(jenis){
				jQuery.noConflict();
				jQuery(document).ready(function($){
					if(jenis=='2_1'){
						$("#selTempoKredit").html('<option class="" value="12">12 Bulan</option><option class="" value="18">18 Bulan</option><option class="" value="24">24 Bulan</option><option class="" value="36">36 Bulan</option><option class="" value="42">42 Bulan</option><option class="" value="48">48 Bulan</option><option class="" value="54">54 Bulan</option><option class="" value="60">60 Bulan</option>');
					}else{
						$("#selTempoKredit").html('<option class="" value="12">12 Bulan</option><option class="" value="18">18 Bulan</option><option class="" value="24">24 Bulan</option><option class="" value="36">36 Bulan</option>');
					}
				});
			}
			$( "#plafondkredit" ).keyup(function() {
					var bilangan = $(this).val();

					$( "#plafondkredit" ).val(bilangan);
				})
			/* Simulasi */
			$('.hitung-kredit').on('click', function(e){
					e.preventDefault();
					$(".result-kredit").html("1.000.000");

					$("#progress").show();
					
					// var xajaxFile = ajaxURL+"cni-content/modules/simulasi/ajax.kredit.php";
					// jQuery.ajax({
					// 	type: 'POST',
					// 	url: xajaxFile,
					// 	data: jQuery('#formKredit').serialize(),
					// 	dataType: 'json',
					// 	success: function(data){
					// 		if(data.error==true){
					// 			$("#progress").hide();
					// 			$(".result-kredit").html(data.alertkredit);
					// 		}
					// 		else{
					// 			$("#progress").hide();
					// 			$(".result-kredit").html(data.resultkredit);
					// 		}
					// 	}
					// });
				});

		</script>
	</body>
</html>
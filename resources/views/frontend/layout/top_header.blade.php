			<div class="topbar">
				<div class="container">
					
				<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							
							<div class="top-contact">
							<marquee scrolldelay="100">
								<div class="single-contact"><i class="fa fa-phone"></i>+62 231-661906</div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>info@bankbkc.co.id</div>	
								<div class="single-contact"><i class="fa fa-clock-o"></i>Operasional: 08:00 - 15:00 WIB</div> 
								</marquee>
							</div>
							
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/perumdabprkab.cirebon"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/bank.bkc"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://youtu.be/nrXoXg91tlc"><i class="fa fa-youtube"></i></a></li>
								</ul>															
								<div class="button">
									<a href="kontak.php" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>

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
																{{-- <li><a href="kontak.php">Sign In</a></li> --}}
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
		
			
			
<script type="text/javascript">
    // (function () {

    //     var options = {
    //         whatsapp: "+6	81398753033", // WhatsApp number
    //         call_to_action: "Bicarakan dengan kami", // Call to action
    //         position: "left", // Position may be 'right' or 'left'

    //     };

    //     var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    // })();
</script>
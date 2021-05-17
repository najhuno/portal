{{-- header assets --}}
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')
	
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
										<h1>Marhaban Yaa<br> Ramadhan</h1>
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
		<section class="video-feature side overlay section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="img-feature " style="max-width: 80%;">
							<!-- <img src="img/why-choose.jpg" alt="Video Thumbnail"> -->
							<img src="{{ asset('assets/frontend/img/800x725.png') }}" alt="Video Thumbnail">

							<div class="video-play">
								<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
									<i class="fa fa-play"></i>
								</a>
								<div class="waves-block">
									<div class="waves wave-1"></div>
									<div class="waves wave-2"></div>
									<div class="waves wave-3"></div>
								</div>
							</div><span>Watch 3 minutes</span>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="features-main ">
							<div class="title">
								<h2>Profil Perusahaan</h2>
								<!-- <p>Our studio is not just about graphic design; it’s more than that. We offer communication services, and we’re responsible</p> -->
							</div>
							<div class="b-features">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<!-- Single List Feature -->
										<div syle="padding-left: 0px;" class="single-list-feature">
											<h4>About us</h4>
											<p>PERUMDA BPR Kabupaten Cirebon adalah hasil penggabungan 12 (Dua belas) Perusahaan Daerah milik Pemerintah Kabupaten Cirebon. Penggabungan usaha (Merger) tersebut antara lain:
PD. BPR Sumber, PD. BPR Arjawinangun, PD. BPR Waled, PD. BPR Karangsembung, PD. BPR Palimanan, PD. BPR Plumbon, PD. BPR Lemahabang, PD. BPR Susukan, PD. BPR Weru, PD. BPR Cirebon Barat dan PD. BPR Cirebon Utara ke dalam PD. BPR Babakan.</p>
										</div>
										<!--/ End Single List Feature -->
									</div>
									
								</div>
							</div>
							<div class="feature-btn">
								<a href="contact.html" class="bizwheel-btn theme-2">Selengkapnya..</a>
							</div>
						</div>
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
									<h3><b class="number" id="NasabahTabunganvalue"></b><span>K</span></h3>
								</div>
								<p id="NasabahTabungan"></p>
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
									<h3><b class="number" id="NasabahDepositovalue"></b><span>+</span></h3>
								</div>
								<p id="NasabahDeposito"></p>
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
									<h3><b class="number" id="NasabahPinjamanvalue"></b><span>+</span></h3>
								</div>
								<p id="NasabahPinjaman"></p>
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
									<h3><b class="number" id="NasabahBaruvalue"></b><span>+</span></h3>
								</div>
								<p id="NasabahBaru"></p>
							</div>
						</div>
						<!--/ End Single Counterup -->
					</div>
				</div>
			</div>
		</section>

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
		<section class="Testimonials section-space" style="background-size: cover;background-position: center;background-repeat: no-repeat;background-image:url(assets/frontend/img/sukubunga2.png)">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
							<div class="section-top" style="margin-bottom: 0px;">
								<h1><b>Suku Bunga</b><hr></h1>
							</div>
							<div class="section-bottom">
								<div class="text"><p>Telah diperbarui 24 Februari 2021, pukul 18:13 WIB<br>
									Tingkat Bunga Penjaminan Periode: 25 Feb 2021 – 28 May 2021</p></div>
							</div>
							<div class="backgroundDasar">
							<table class="table">
								<tbody>
									<tr>
									<td style="background-color: #d21e2b; color: #fff; text-align: left;">PRODUK</td>
									<td style="background-color: #d21e2b; color: #fff; text-align: left;">SUKU BUNGA <br>(% per tahun)</td>
									</tr>
									<tr>
									<td style="text-align: left; background-color: #ddd;">BI Rate</td>
									<td style="text-align: left; background-color: #ddd;">3,50 %</td>
									</tr>
									<tr>
									<td style="text-align: left;">LPS BPR</td>
									<td style="text-align: left;">6,75 %</td>
									</tr>
									<tr>
									<td style="text-align: left; background-color: #ddd;">LPS Bank Umum</td>
									<td style="text-align: left; background-color: #ddd;">4,25 %</td>
									</tr>
									<tr>
									<td style="text-align: left;">Tabungan Simpati</td>
									<td style="text-align: left;">5,00 %</td>
									</tr>
									<tr>
									<td style="text-align: left; background-color: #ddd;">Tabungan Simpelmas</td>
									<td style="text-align: left; background-color: #ddd;">5,00 %</td>
									</tr>
									<tr>
									<td style="text-align: left;">Deposito 12 Bulan</td>
									<td style="text-align: left;">6,25 %</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
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
		<section class="Testimonials section-space"  style="background-repeat: no-repeat;background-image:url(assets/frontend/img/1500x700.png)">
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

		<!-- Chat -->
		@include('frontend.layout.chat')

		<!-- Footer -->
		@include('frontend.layout.footer')

		<!-- Footer -->
		@include('frontend.layout.footerasset')
		
	</body>
</html>
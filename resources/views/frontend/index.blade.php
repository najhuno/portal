{{-- header assets --}}
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')
	
<!-- Hero Slider -->
<section class="hero-slider style1">
	<div class="home-slider">
		<!-- Single Slider -->
		<div class="single-slider" style="background:url(assets/frontend/img/slider/slide1.png)">
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
		<div class="single-slider" style="background:url(assets/frontend/img/slider/slide3.png)">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-8 col-12">
						<div class="welcome-text"></div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
		<!-- Single Slider -->
		<div class="single-slider" style="background:url(assets/frontend/img/slider/keppincut_web.png)">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-8 col-12">
						<div class="welcome-text"></div>
						<div class="hero-text"> 
							<h1 style="font-size: 75px;font: icon;"><b>Pengajuan Kredit <br>mudah dan cepat</b></h1>
							<div class="button">
								<a href="#" target="_blank" class="bizwheel-btn theme-1 effect">Silakan Ajukan Kredit.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->		
	</div>

	
</section>
<!--/ End Hero Slider -->

<!-- Produk -->
<section class="blog-layout news-default section-space"id="produkkredit">
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
		<div class="row ">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{ asset('assets/frontend/img/produk_kredit.png') }}" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="{{ url('detailproduk/kredit') }}">Pinjaman (Kredit)</a></h3>
							<div class="news-text"><p>Fasilitas unggulan yang mampu memberikan keuntungan lebih kepada para debitur. Dengan suku bunga kredit ringan, proses cepat dan tepat.</p></div>
							<a href="{{ url('detailproduk/kredit') }}" class="more theme-2">Lihat Selengkapnya <i class="fa fa-angle-double-right " aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{ asset('assets/frontend/img/produk_tabungan.png') }}" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">Tabungan</a></h3>
							<div class="news-text"><p>Simpnanan yang menguntungkan dengan setoran terjangkau yang memberikan kemudahan dalam bertransaksi.</p><br></div>
							<a href="{{ url('detailproduk/kredit') }}" class="more">Lihat Selengkapnya <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{ asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">Deposito</a></h3>
							<div class="news-text"><p>Produk simpanan berjangka yang ideal dengan bunga kompetitif agar berinvestasi ditempat yang aman dan terpercaya, sekaligus menguntungkan</p><br></div>
							<a href="blog-single.html" class="more">Lihat Selengkapnya <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
		
		</div>
	</div>
</section>
<!--/ End Produk -->

<!-- Suku Bunga -->
<section class="Testimonials" style="padding-top:50px;padding-bottom:50px;background-size: cover;background-position: center;background-repeat: no-repeat;background-image:url(assets/frontend/img/profil.png)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-9 col-12">
				<div class="section-title default text-left">
					<div class="section-top" style="margin-bottom: 0px;">
						<h2 style="font-size: 32px;
						position: relative;
						display: inline-block"><b>Suku Bunga</b><hr></h2>
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
							<td style="text-align: left; background-color: #ddd;"><h5 id="potpns"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="potpnsvalue"></h5></td>
							</tr>
							<tr>
							<td style="text-align: left;"><h5 id="sertifikasi"></h5></td>
							<td style="text-align: left;"><h5 id="sertifikasivalue"></h5></td>
							</tr>
							<tr>
							<td style="text-align: left; background-color: #ddd;"><h5 id="siltap"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="siltapvalue"></h5></td>
							</tr>
							<tr>
							<td style="text-align: left;"><h5 id="tpp"></h5></td>
							<td style="text-align: left;"><h5 id="tppvalue"></h5></td>
							</tr>
							<tr>
							<td style="text-align: left; background-color: #ddd;"><h5 id="umum"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="umumvalue"></h5></td>
							</tr>
							<tr>
							<td style="text-align: left;">Deposito 12 Bulan</td>
							<td style="text-align: left;">6,50 %</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
			<div class="col-lg-6 col-md-9 col-12">
				<div class="section-title default text-left">
					<div class="section-top" style="margin-bottom: 0px;">
						<h2 style="font-size: 22px;
						position: relative;
						display: inline-block"><b>Informasi Lembaga Penjamin Simpanan (LPS)</b><hr></h2>
					</div>
					<div class="section-bottom">
						<div class="text">Nilai besaran simpanan yang dijamin oleh lembaga Penjamin Simpanan per tanggal 13 Oktober 2008. Dan berdasarkan evaluasi pada bulan Februari 2021, Tingkat Bunga Penjaminan simpanan dalam rupiah di BPR mengalami penurunan sebesar 25 bps.</div>
					</div><br>
					<a href="https://www.lps.go.id/f.a.q#:~:text=Nilai%20simpanan%20yang%20dijamin%20oleh,saldo%20seluruh%20rekening%20tersebut%20dijumlahkan." target="_blank" class="bizwheel-btn theme-2">Nilai Besar Simpanan<br>
						<strong>Rp 2.000.000.000,-</strong>
					</a>&nbsp;&nbsp;&nbsp;							
					<a href="https://www.lps.go.id/web/guest/home?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=column-3&p_p_col_count=1&_56_INSTANCE_abcd_groupId=10157&_56_INSTANCE_abcd_articleId=1407404" target="_blank" class="bizwheel-btn theme-2">Tingkat Bunga Wajar<br>
						<strong>6,75%</strong>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Suku bunga -->

<!--/ Dashboard -->
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
<!-- End Dashboard -->

<!-- Kalkulator -->
@include('frontend.kalkulator')
<!-- End Kalkulator-->

<!-- OJK -->
<section class="call-action overlay" style="opacity: 0.98;background-image: url({{ asset('assets/frontend/img/banner1.png') }}">
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
<!--/ End OJK -->

{{-- <section class="about-us section-space" style="background-size: cover;background-position: center;background-repeat: no-repeat;background-image:url({{ asset('assets/frontend/img/profil.png') }})">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 col-md-6 col-12">
				<div class="modern-img-feature">
					<img src="{{ asset('assets/frontend/img/800x725.png') }}" alt="#">
					<div class="video-play">
						<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
							<i class="fa fa-play"></i>
						</a>
						<a type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/-3SOWKUuI7Q" data-target="#myModal">
							<i class="fa fa-play"></i>
						</a>
					</div>
					<div class="video-play">
						<a type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/-3SOWKUuI7Q" data-target="#myModal">
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
			<div class="col-lg-5 col-md-6 col-12">
				<div class="about-content section-title default text-left">
					<div class="section-top">
						<h1><span>About Us</span><b>We Provide Quality Business &amp; Smart Solution</b></h1>
					</div>
					<div class="section-bottom">
						<div class="text">
							<p>Lorem Ipsum Dolor Sit Amet, Consectetur AdipiscinE Tellus, Luctus Nec Ullamcorper Mattis, Pulvinr Dapius Leo.Greater Great Set Seasons Praesent auctor facilisis</p>
							<p>Greater great set seasons was morning creepeth all made replen fisher night to. She to fourth does. cattle also be days second sit given can itself you good for better solution. morning creepeth all made replen fisher night to. She</p>
						</div>
						<div class="button">
							<a href="about.html" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<!-- Profil -->
<section class="about-us section-space " style="background-size: cover;background-position: center;background-repeat: no-repeat;background-image:url({{ asset('assets/frontend/img/profil.png') }})">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="img-feature " style="max-width: 80%;">
					
					<img src="{{ asset('assets/frontend/img/800x725.png') }}" alt="Video Thumbnail">

					<div class="video-play">
						<a type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/-3SOWKUuI7Q" data-target="#myModal">
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
			
			<div class="col-lg-5 col-md-6 col-12">
				<div class="about-content section-title default text-left">
					<div class="section-top">
						<h1><span>About Us</span><b>Profil Perusahaan</b></h1>
					</div>
					<div class="section-bottom">
						<div class="text">
							<p>PERUMDA BPR Kabupaten Cirebon adalah hasil penggabungan 12 (Dua belas) Perusahaan Daerah milik Pemerintah Kabupaten Cirebon. Penggabungan usaha (Merger) tersebut antara lain:
								PD. BPR Sumber, PD. BPR Arjawinangun, PD. BPR Waled, PD. BPR Karangsembung, PD. BPR Palimanan, PD. BPR Plumbon, PD. BPR Lemahabang, PD. BPR Susukan, PD. BPR Weru, PD. BPR Cirebon Barat dan PD. BPR Cirebon Utara ke dalam PD. BPR Babakan.</p>
						</div>
						<div class="button">
							<a href="about.html" class="bizwheel-btn theme-2">Lihat Selengkapnya<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- show video -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="padding-top: 5%;" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">		
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>   
					{{-- <button title="Close (Esc)" class="close" data-dismiss="modal" aria-label="Close">×</button>      --}}
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>
<!-- End Profil -->

<section class="call-action overlay" style="background-image:url({{ asset('assets/frontend/img/cta-bg.jpg') }}">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="call-inner">
					<h2>Layanan Bank BKC</h2>
					<p>Bank BKC terus meningkatkan layanan yang unggul dan berdaya saing</p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="button">
					<a href="portfolio.html" class="bizwheel-btn theme-2 effect" style="border-radius: 25px;">Lihat layanan Bank BKC</a>
				</div>
			</div>
		</div>
	</div>
</section>
		
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
<!-- Client Area -->
<div class="clients " style="background: #4987ce;">
	
	<div class="container">
		{{-- <div class="row"> --}}
			{{-- <div class="col-12"> --}}
				<marquee align="left"  onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5">
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-1.png') }}" alt="#"></a>
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-2.png') }}" alt="#"></a>
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-3.png') }}" alt="#"></a>
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-4.png') }}" alt="#"></a>
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-5.png') }}" alt="#"></a>
					<a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/client/client-6.png') }}" alt="#"></a>
				</marquee>
				{{-- <div class="partner-slider" data-margin="40" data-slides_per_view="6" data-autoplay="yes" data-hide_control="yes" data-hide_buttons="yes">
					
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
					
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
				
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
				
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
				
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
				
					<div class="single-slider">
						<div class="single-client">
						</div>
					</div>
				
				</div> --}}
				
			{{-- </div> --}}
		{{-- </div> --}}
	</div>

</div>
<!--/ End Client Area -->

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
		
		
		
		<!-- Latest Blog -->
		{{-- <section class="latest-blog section-space">
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
							
							</div>
							<div class="single-slider">
								
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
								
							</div>
							<div class="single-slider">
								
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
							</div>
							<div class="single-slider">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Latest Blog -->
		
		
		

		<!-- Chat -->
		@include('frontend.layout.chat')

		<!-- Footer -->
		@include('frontend.layout.footer')

		<!-- Footer -->
		@include('frontend.layout.footerasset')
		
	</body>
</html>
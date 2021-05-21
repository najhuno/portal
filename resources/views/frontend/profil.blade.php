<!-- header assets -->>
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')



		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image: url({{ asset('assets/frontend/img/1600x500.png')}}">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">Tentang Kami</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Profil</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
        
<!-- Skill Area -->
<section class="skill-area section-space" style="background-image:url({{ asset('assets/frontend/img/nabung.png') }}">
	<div class="container">
		<div class="row">
            <div class="col-lg-6  col-md-6 col-12">
                <!-- About Video -->
                <div class="modern-img-feature">
                    <img style="height: 50%" src="{{ asset('assets/frontend/img/800x725.png')}}" alt="#">
                </div>
                <!--/End About Video  -->
            </div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="section-title  default text-left ">
					<div class="section-top">
						<h1><span>About Us</span><b>Profil Perusahaan</b></h1>
					</div>
					
					<div class="section-bottom"> Kami menyediakan beragam jenis produk Kredit untuk mewujudkan impian Anda, keluarga Anda, dan juga untuk para pebisnis dan pengusaha. Proses yang cepat dan persyaratan yang mudah menunjukkan komitmen BPR Lestari untuk mendukung segala jenis kebutuhan dan usaha Anda.</p>
					
					</div>

					

				</div>
			</div>
            
        </div>
        <div class="row">
            <a class="icon-scroll" href="#produkkredit"><i class="fa fa-chevron-down"></i></a>
            {{-- <a href="#top" class="icon-scroll" style="position: fixed; z-index: 2147483647;"><i class="fa fa-chevron-down"></i></a> --}}
        </div>
	</div>
</section>	
<!--/ End Skill Area -->
		
		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-1 col-md-6 col-12">
						<!-- About Video -->
						<div class="modern-img-feature">
							<img src="{{ asset('assets/frontend/img/800x725.png')}}" alt="#">
						</div>
						<!--/End About Video  -->
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="about-content section-title default text-left">
							<div class="section-top">
								<h1><span>About Us</span><b>Profil Perusahaan</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text" style="text-align: justify">
									PERUMDA BPR Kabupaten Cirebon  adalah hasil penggabungan 12 (Dua belas) Perusahaan Daerah milik Pemerintah Kabupaten Cirebon. Penggabungan usaha (<i>Merger</i>) tersebut antara lain: <br>
									PD. BPR Sumber, PD. BPR Arjawinangun, PD. BPR Waled, PD. BPR Karangsembung, PD. BPR Palimanan, PD. BPR Plumbon, PD. BPR Lemahabang, PD. BPR Susukan, PD. BPR Weru, PD. BPR Cirebon Barat dan PD. BPR Cirebon Utara ke dalam PD. BPR Babakan.<br><br>
									Kemudian, dari PD. BPR Babakan melakukan perubahan nama berdasarkan keputusan Kepala Otoritas Jasa Keuangan Cirebon Nomor Kep-11/KO-0201/2020 tanggal 8 April 2020 Tentang Pengalihan izin usaha atas perubahan nama dan bentuk badan hukum dari Perusahaan Daerah Bank Perkreditan Rakyat Babakan kepada Perusahaan Umum Daerah Bank Perkreditan Rakyat Kabupaten Cirebon, maka terhitung pada tanggal 22 April 2020 resmi menggunakan nama PERUMDA BPR Kabupaten Cirebon atau dengan nama panggilan BANK BKC.
								</div>
							</div>
						</div>
					</div>
					Upaya untuk mewujudkan kinerja sesuai dengan nama yang disandang, BANK BKC selalu berpegang pada azas keterbukaan dan kehati-hatian. Didukung oleh beragam produk dan fasilitas perbankan terkini, BANK BKC terus Bersatu, Profesional dan Melayani.
				</div>
			</div>
			
		</section>	
		<!--/ End About Us -->
		
		<!-- Skill Area -->
		<section class="skill-area section-space" style="background-image:url({{ asset('assets/frontend/img/profil.png') }}">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-8 col-12">
						<div class="section-title  default text-left ">
							<div class="section-top">
								<h1><span>Business Activities</span><b>Kegiatan Usaha</b></h1>
						</div>
						<div class="skill-main">	
                            <div class="small-list-feature">
                                <h3>Kegiatan usaha yang dapat dilakukan BPR:</h3>
                                <ul>
                                    <li><i class="fa fa-check"></i>Menghimpun dana masyarakat dalam bentuk simpanan berupa deposito berjangka, tabungan dan/atau bentuk lainnya yang dipersamakan dengan itu;</li>
                                    <li><i class="fa fa-check"></i>Memberikan kredit;</li>
                                    <li><i class="fa fa-check"></i>Menempatkan dananya dalam bentuk Sertifikat Bank Indonesia (SBI), deposito berjangka, sertifikat deposito dan atau tabungan pada Bank lain.</li>
                                    
                                </ul>
                            </div>
                            <div class="small-list-feature">
                                <h3>Kegiatan usaha yang tidak dapat dilakukan BPR:</h3>
                                <ul>
                                    <li><i class="fa fa-check"></i>Menerima simpanan berupa giro dan ikut serta dalam lalu lintas pembayaran;</li>
                                    <li><i class="fa fa-check"></i>Melakukan kegiatan usaha dalam valuta asing kecuali sebagai pedagang valuta asing (dengan izin Bank Indonesia);</li>
                                    <li><i class="fa fa-check"></i>Melakukan penyertaan modal;</li>
                                    <li><i class="fa fa-check"></i>Melakukan usaha perasuransian;</li>
                                    <li><i class="fa fa-check"></i>Melakukan usaha lain di luar kegiatan usaha sebagaimana disebutkan pada kegiatan usaha yang dapat dilakukan BPR.</li>
                                    
                                </ul>
                            </div>
							
						
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Skill Area -->


<!-- Footer -->
@include('frontend.layout.footer')
<!-- footer assets -->
@include('frontend.layout.footerasset')
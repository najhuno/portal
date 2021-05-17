{{-- header assets --}}
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
							<li><a href="#">Produk</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<div class="bread-title"><h2>Tabungan</h2></div>
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
			<div class="col-lg-6 col-md-8 col-12">
				<div class="section-title  default text-left ">
					<div class="section-top">
						<h1><span>Saving</span><b>Tabungan Menguntungkan</b></h1>
					</div>
					
					<div class="section-bottom">Dengan setoran terjangkau yang memberikan berbagai kemudahan dalam bertransaksi. Disajikan dengan pelayanan personal antusias dan tulus. Dapat dilakukan dengan setoran uang koin.</p>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<!--/ End Skill Area -->

<!-- Blog Layout -->
<section class="blog-layout news-default section-space">
	<div class="container">
	<h2>Produk Tabungan BANK BKC</h2>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="https://via.placeholder.com/700x530" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title">TAMASDA</h3>
							<h6 class="news-title">Tabungan Masyarakat Daerah</h6>
							<div class="news-text"><p>Merupakan tabungan yang ditujukan untuk memenuhi berbagai kebutuhan masyarakat dalam penyimpanan dan pengamanan uang, baik dalam rangka investasi, cadangan likuiditas usaha, cadangan kebutuhan masa depan dan fasilitas-fasilitas yang memudahkan Anda dalam pembayaran kewajiban.</p></div>
							
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="https://via.placeholder.com/700x530" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title">TASIS</h3>
							<h6 class="news-title">Tabungan Siswa</h6>
							<div class="news-text"><p>Produk tabungan yang diperuntukkan bagi para pelajar atau orang tua murid dan para guru untuk persiapan biaya pendidikan. Tabungan Siswa membantu perencanaan keuangan untuk memastikan kesiapan biaya pendidikan putra putri Anda.</p></div>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="https://via.placeholder.com/700x530" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title">TANAS</h3>
							<h6 class="news-title">Tabungan Anak Sekolah</h6>
							<div class="news-text"><p>Perencanaan keuangan yang baik merupakan kunci untuk menikmati kehidupan di masa yang akan datang. Tabungan Anak Sekolah akan membantu wujudkan impian anda. Tabungan berjangka dengan berbagai keuntungan dan bebas biaya apapun.</p></div>
							
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->

			</div>
		</div>
	</div>
</section>
<!-- Skill Area -->
<section class="skill-area section-space" style="background: #F0F0F0">
	<div class="container">
		<div class="row">
			<div>

				<div class="section-title  default text-left ">
						<div class="section-top"><h1><b>Karakteristik Produk</b></h1>
							<ol type="1">
								<li>Tanpa biaya administrasi bulanan.</li>
								<li>Setoran awal kecil, hanya Rp 10.000 dan biaya penutupan ringan.</li>
								<li>Tidak ada setoran minimum.</li>
								<li>Saldo minimum Rp 10.000,-</li>
								<li>Produk berlaku sampai dengan saat ini.</li>
							</ol>
						</div>
				</div>

				<div class="section-title  default text-left ">
						<div class="section-top"><h1><b>Manfaat</b></h1>
							<ol type="1">
								<li>Aman dan dijamin oleh LPS</li>
								<li>Mendapatkan bunga yang sangat menguntungkan dan kompetitif (menggunakan metode perhitungan suku bunga simple-threshold maksimal 5%) yang dihitung secara akrual harian dengan metode perhitungan saldo rata-rata selama satu bulan dan diberikan/ dikapitalisasi pada setiap tanggal akhir bulan</li>
								<li>Bebas berapa saja dan berapa kali penarikan.</li>
								<li>Bebas pajak bunga tabungan untuk saldo tabungan sampai dengan Rp 7.500.000,-</li>
								<li>Bebas biaya pembukaan, penggantian buku.</li>
							</ol>
						</div>
				</div>

				<div class="section-title  default text-left">
					<div class="section-top"><h1><b>Resiko</b></h1>
						<ol type="1">
							 <li><h6>Jika nasabah tidak melakukan transaksi dalam 180 hari, maka rekening akan dinyatakan pasif sehingga berisiko:</h6>
								  <ol type="a">
									  <li>Perhitungan bunga tidak dilakukan.</li>
									<li>Dikenakan biaya penalti rekening pasif.</li>
									<li>Nasabah tidak dapat melakukan transaksi pendebetan rekening.</li>
									<li>Dibebankan biaya rekening pasif/tidak aktif yang jumlahnya sesuai ketentuan yang berlaku,</li>
									<li>Jika saldonya juga nihil (Rp0), maka rekening dapat ditutup secara otomatis oleh Bank.</li>
								 </ol>
							 </li>

							 <li><h6>Dana simpanan nasabah berisiko tidak dijamin oleh LPS jika memenuhi kriteria :</h6>
								 <ol type="a">
									 <li>Bunga yang diperoleh/ diberikan melebihi maksimum suku bunga yang dianggap wajar yang ditetapkan oleh LPS; atau</li>
									<li>Jumlah simpanan melebihi maksimum nilai simpanan yang dijamin oleh LPS (Rp2 Miliar).</li>
								 </ol>
							 </li>
						</ol>
					</div>
				</div>

				<div class="section-title  default text-left ">
					<div class="section-top"><h1><b>Biaya</b></h1>
						<ol type="1">
							<li>Gratis biaya pembukaan rekening, biaya penalti rekening pasif dan biaya penggantian buku.</li>
							<li>Biaya administrasi bulanan Rp5rb</li>
							<li>Biaya penutupan rekening Rp5rb</li>
							<li>Metode pembebanan biaya adalah cash basis</li>
						</ol>
					</div>
				</div>

				<div class="section-title  default text-left">
					<div class="section-top"><h1><b>Syarat dan Ketentuan</b></h1>
						<ol type="1">
							<li><h6>Nasabah datang ke CS Bank untuk mengisi formulir Bank dan memberikan informasi serta dokumen yang dibutuhkan untuk proses CDD.</h6></li>	
							 <li><h6>Dokumen yang harus dipersiapkan dan disampaikan oleh Nasabah ke Bank :</h6>
								  <ol type="a">
									  <li>Identitas Nasabah Perorangan
										  <ol>
											  <p>> KTP/SIM/ Passport/ KIMS / KITAS/ KITAP</p>
											  <p>> Spesimen tanda tangan nasabah</p>
										  </ol>
									  </li>

									<li>Identitas Nasabah Perusahaan/Badan/Lembaga
										<ol>
											  <p>> Akte pendirian da/atau Anggaran Dasar Perusahaan</p>
											  <p>> SK Persetujuan Pendirian PT dari KEMENKUMHAM</p>
											  <p>> TDP/ SKDP/ SITU/ SIUP</p>
											  <p>> SK Persetujuan Pendirian PT dari KEMENKUMHAM</p>
											  <p>> NPWP</p>
											  <p>> Spesimen tanda tangan pengurus</p>
											  <p>> Fotokopi KTP/SIM/KIMS pengurus</p>
										  </ol>
									  </li>

									<li>Nasabah tidak dapat melakukan transaksi pendebetan rekening.</li>
									<li>Dibebankan biaya rekening pasif/tidak aktif yang jumlahnya sesuai ketentuan yang berlaku,</li>
									<li>Jika saldonya juga nihil (Rp0), maka rekening dapat ditutup secara otomatis oleh Bank.</li>
								 </ol>
							 </li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<!--/ End Skill Area -->


<!-- Footer -->
@include('frontend.layout.footer')
{{-- footer assets --}}
@include('frontend.layout.footerasset')

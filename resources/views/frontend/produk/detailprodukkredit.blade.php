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
					<div class="bread-title"><h2>Pinjaman (Kredit)</h2></div>
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
						<b><h1>Kredit</h1></b>
					</div>
					
					<div class="section-bottom"> Kami menyediakan beragam jenis produk Kredit untuk mewujudkan impian Anda, keluarga Anda, dan juga untuk para pebisnis dan pengusaha. Proses yang cepat dan persyaratan yang mudah menunjukkan komitmen BPR Lestari untuk mendukung segala jenis kebutuhan dan usaha Anda.</p>
					
					</div>

					<br><br>
					<div class="form-group button">
						<button type="submit" class="bizwheel-btn theme-1 btn-pengajuan" data-toggle="modal" data-target="#addNasabah">Ajukan Kredit</button>
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

<!-- Latest Blog -->
<section class="blog-layout news-default section-space"id="produkkredit">
	<div class="container">
		<div class="row ">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="{{ url('detailproduk/kredit/potpns') }}">Kredit Potongan Gaji PNS/HONOR</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="{{ url('detailproduk/kredit/potpns') }}" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">Kredit Sertifikasi</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">SILTap</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">TPP</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">Perdagangan Umum</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news ">
					<div class="news-head overlay">
						<img src="{{asset('assets/frontend/img/produk_deposito.png') }}" alt="#">
						<ul class="news-meta">
							<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
							<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
							<li class="view"><i class="fa fa-comments"></i>0</li>
						</ul>
					</div>
					<div class="news-body">
						<div class="news-content">
							<h3 class="news-title"><a href="blog-single.html">Kredit Kepincut</a></h3>
							<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas</p></div>
							<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!--/ End Single Blog -->
			</div>
		</div>
		
	</div>
</section>
<!--/ End Latest Blog -->


<!-- Skill Area -->
<section class="skill-area section-space" style="background: #F0F0F0">
	<div class="container">
		<div class="row">
			<div class="service-content">
				<div class="row service-space">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Service Feature -->
						<div class="small-list-feature">
							<h3>Karakteristik Produk</h3>
							<ul>
								<li><i class="fa fa-check"></i>Tanpa biaya administrasi bulanan.</li>
								<li><i class="fa fa-check"></i>Setoran awal kecil, hanya Rp 10.000 dan biaya penutupan ringan.</li>
								<li><i class="fa fa-check"></i>Tidak ada setoran minimum.</li>
								<li><i class="fa fa-check"></i>Saldo minimum Rp 10.000,-</li>
								<li><i class="fa fa-check"></i>Produk berlaku sampai dengan saat ini.</li>
								
							</ul>
						</div>
						<hr>
						<div class="small-list-feature">
							<h3>Manfaat</h3>
							<ul>
								<li><i class="fa fa-check"></i>Aman dan dijamin oleh LPS</li>
								<li><i class="fa fa-check"></i>Mendapatkan bunga yang sangat menguntungkan dan kompetitif (menggunakan metode perhitungan suku bunga simple-threshold maksimal 5%) yang dihitung &nbsp;&nbsp;&nbsp;&nbsp; secara akrual harian dengan metode perhitungan saldo rata-rata selama satu bulan dan diberikan/ dikapitalisasi pada setiap tanggal akhir bulan</li>
								<li><i class="fa fa-check"></i>Bebas berapa saja dan berapa kali penarikan.</li>
								<li><i class="fa fa-check"></i>Bebas pajak bunga tabungan untuk saldo tabungan sampai dengan Rp 7.500.000,-</li>
								<li><i class="fa fa-check"></i>Bebas biaya pembukaan, penggantian buku.</li>
							</ul>
						</div>
						<hr>
						<div class="small-list-feature">
							<h3>Resiko</h3>
							<p>Jika nasabah tidak melakukan transaksi dalam 180 hari, maka rekening akan dinyatakan pasif sehingga berisiko:</p>
							<ul>
								<li><i class="fa fa-check"></i>Perhitungan bunga tidak dilakukan.</li>
								<li><i class="fa fa-check"></i>Dikenakan biaya penalti rekening pasif.</li>
								<li><i class="fa fa-check"></i>Nasabah tidak dapat melakukan transaksi pendebetan rekening.</li>
								<li><i class="fa fa-check"></i>Dibebankan biaya rekening pasif/tidak aktif yang jumlahnya sesuai ketentuan yang berlaku,</li>
								<li><i class="fa fa-check"></i>Jika saldonya juga nihil (Rp0), maka rekening dapat ditutup secara otomatis oleh Bank.</li>
							</ul>							
							<p>Dana simpanan nasabah berisiko tidak dijamin oleh LPS jika memenuhi kriteria :</p>
							<ul>
								<li><i class="fa fa-check"></i>Bunga yang diperoleh/ diberikan melebihi maksimum suku bunga yang dianggap wajar yang ditetapkan oleh LPS; atau</li>
								<li><i class="fa fa-check"></i>Jumlah simpanan melebihi maksimum nilai simpanan yang dijamin oleh LPS (Rp2 Miliar).</li>
								
							</ul>
						</div>
						<hr>
						<div class="small-list-feature">
							<h3>Biaya</h3>
							<p>Jika nasabah tidak melakukan transaksi dalam 180 hari, maka rekening akan dinyatakan pasif sehingga berisiko:</p>
							<ul>
								<li><i class="fa fa-check"></i>Gratis biaya pembukaan rekening, biaya penalti rekening pasif dan biaya penggantian buku.</li>
								<li><i class="fa fa-check"></i>Biaya administrasi bulanan Rp5rb</li>
								<li><i class="fa fa-check"></i>Biaya penutupan rekening Rp5rb</li>
								<li><i class="fa fa-check"></i>Metode pembebanan biaya adalah cash basis</li>
							</ul>							
						</div>
						<hr>
						<div class="small-list-feature">
							<h3>Syarat Dan Ketentuan</h3>
							<p>Nasabah datang ke CS Bank untuk mengisi formulir Bank dan memberikan informasi serta dokumen yang dibutuhkan untuk proses CDD.</p>
							<p>Dokumen yang harus dipersiapkan dan disampaikan oleh Nasabah ke Bank :</p>
							<p>Identitas Nasabah Perorangan</p>	
							<ul>
								<li><i class="fa fa-check"></i>KTP/SIM/ Passport/ KIMS / KITAS/ KITAP</li>
								<li><i class="fa fa-check"></i>Spesimen tanda tangan nasabah</li>
							</ul>	
							<p>Identitas Nasabah Perusahaan/Badan/Lembaga</p>		
							<ul>
								<li><i class="fa fa-check"></i>Akte pendirian da/atau Anggaran Dasar Perusahaan</li>
								<li><i class="fa fa-check"></i>SK Persetujuan Pendirian PT dari KEMENKUMHAM</li>
								<li><i class="fa fa-check"></i>TDP/ SKDP/ SITU/ SIUP</li>
								<li><i class="fa fa-check"></i>NPWP</li>
								<li><i class="fa fa-check"></i>Spesimen tanda tangan pengurus</li>
								<li><i class="fa fa-check"></i>Fotokopi KTP/SIM/KIMS pengurus</li>
								
								
							</ul>
							<p>Nasabah tidak dapat melakukan transaksi pendebetan rekening.</p>
							<p>Dibebankan biaya rekening pasif/tidak aktif yang jumlahnya sesuai ketentuan yang berlaku,</p>
							<p>Jika saldonya juga nihil (Rp0), maka rekening dapat ditutup secara otomatis oleh Bank.</p>			
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>	
<!--/ End Skill Area -->

<!-- Chat -->
@include('frontend.layout.chat')

<!-- Footer -->
@include('frontend.layout.footer')

<!-- footer assets -->
@include('frontend.layout.footerasset')

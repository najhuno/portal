{{-- header assets --}}
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')
	
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('assets/frontend/img/1600x500.png') }}')">
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
					<div class="bread-title"><h2>Deposito</h2></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / End Breadcrumb -->	

<!-- Skill Area -->
<section class="skill-area section-space" style="background-image:url('{{ asset('assets/frontend/img/deposito.png') }}')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8 col-12">
				<div class="section-title  default text-left ">
					<div class="section-top">
						<h1><span>Saving</span><b>Deposito</b></h1>
					</div>
					
					<div class="section-bottom">Produk simpanan berjangka yang ideal dengan bunga kompetitif agar berinvestasi ditempat yang aman dan terpercaya, sekaligus menguntungkan</p>
					
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
		<h2>Pilihan tepat investasi Anda untuk masa depan</h2><br>
			<div class="row">
				

				<div class="container">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>No.</th>
								<th>Jenis Produk</th>
								<th>Suku Bunga</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center">1.</td>
								<td>Deposito 6 Bulan</td>
								<td>5,00% per tahun</td>
								<td></td>
							</tr>
							<tr>
								<td align="center">2.</td>
								<td>Deposito 3 Bulan</td>
								<td>5,75% per tahun</td>
								<td></td>
							</tr>
							<tr>
								<td align="center">3.</td>
								<td>Deposito 6 Bulan</td>
								<td>6,00% per tahun</td>
								<td></td>
							</tr>
							<tr>
								<td align="center">4.</td>
								<td>Deposito 12 Bulan</td>
								<td>6,50% per tahun</td>
								<td></td>
							</tr>
							<tr>
								<td align="center">5.</td>
								<td>Deposito 24 Bulan</td>
								<td>6,50% per tahun</td>
								<td></td>
							</tr>
						</tbody>
					</table>

					<script src="assets/js/jquery.js"></script> 
					<script src="assets/js/popper.js"></script> 
					<script src="assets/js/bootstrap.js"></script>
					<p>* Suku bungan yang berlaku (Maksimal penjaminan LPS)</p>
				</div>

			</div>
		</div>
</section>
<!-- Skill Area -->
<section class="skill-area section-space" style="background: #F0F0F0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8 col-12">
				<div class="section-title  default text-left ">
					<div class="section-top">
						<h1><span>Formula</span><b>Simulasi Bunga Deposito</b></h1>
					</div>
					<div class="section-bottom">* Dijamin oleh Lembaga Penjamin Simpanan</p></div>
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

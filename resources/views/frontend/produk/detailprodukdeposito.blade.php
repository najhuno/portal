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
					<br><br>
					<div class="form-group button">
						<button type="submit" class="bizwheel-btn theme-2 btn-pengajuan" data-toggle="modal" data-target="#addNasabah">Buka Deposito</button>
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
		<h2></h2><br>
		
			{{-- <p style="font-size: 22px"></p> --}}
			<div class="section-top" style="margin-bottom: 0px;">
				<h2 style="font-size: 32px;
				position: relative;
				display: inline-block"><b>Pilihan tepat investasi Anda untuk masa depan</b><hr></h2>
			</div>
			<div class="section-bottom">
				<div class="text"><p>Telah diperbarui 24 Februari 2021, pukul 18:13 WIB<br>
					Tingkat Bunga Penjaminan Periode: 25 Feb 2021 – 28 May 2021</p></div>
			</div>
					
			<div class="row">
				<div class="backgroundDasar container">
					<table class="table">
						<tbody>
						<tr>
							<td style="background-color: #d21e2b; color: #fff; text-align: left;">NO</td>
							<td style="background-color: #d21e2b; color: #fff; text-align: left;">JENIS PRODUK</td>
							<td style="background-color: #d21e2b; color: #fff; text-align: left;">SUKU BUNGA <br>(% per tahun)</td>
							<td style="background-color: #d21e2b; color: #fff; text-align: left;">KETERANGAN </td>
						</tr>
						<tr>
							<td style="text-align: left;background-color: #ddd;"><h5>1</h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="potpns"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="potpnsvalue"></h5></td>
							<td style="text-align: left;background-color: #ddd;"><h5></h5></td>
						</tr>
						<tr>
							<td style="text-align: left;"><h5>1</h5></td>
							<td style="text-align: left;"><h5 id="sertifikasi"></h5></td>
							<td style="text-align: left;"><h5 id="sertifikasivalue"></h5></td>
						</tr>
						<tr>
							<td style="text-align: left;background-color: #ddd;"><h5>2</h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="siltap"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="siltapvalue"></h5></td>
							<td style="text-align: left;background-color: #ddd;"><h5></h5></td>
						
						</tr>
						<tr>
							<td style="text-align: left;"><h5>3</h5></td>
							<td style="text-align: left;"><h5 id="tpp"></h5></td>
							<td style="text-align: left;"><h5 id="tppvalue"></h5></td>
							<td style="text-align: left;"><h5></h5></td>

						</tr>
						<tr>
							<td style="text-align: left;background-color: #ddd;"><h5>4</h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="umum"></h5></td>
							<td style="text-align: left; background-color: #ddd;"><h5 id="umumvalue"></h5></td>
							<td style="text-align: left;background-color: #ddd;"><h5></h5></td>
						
						</tr>
						<tr>
							<td style="text-align: left;"><h5>5</h5></td>
							<td style="text-align: left;">Deposito 12 Bulan</td>
							<td style="text-align: left;">6,50 %</td>
							<td style="text-align: left;"><h5></h5></td>

						</tr>
						<tr><td colspan="4"><p>* Suku bungan yang berlaku (Maksimal penjaminan LPS)</p></td></tr>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
</section>
<!-- Skill Area -->
<section class="skill-area section-space" style="background-image: url({{ asset('assets/frontend/img/profil.png') }});">
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
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
			<div class="contact-form-area m-top-30">
				<div class="bd-example bd-example-tabs">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					
						<li class="nav-item">
							<a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>Simulasi Deposito</h4></a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
					
						<div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<br>
							{{-- <h5>Simulasi Deposito</h5> --}}
							<form id="formDeposito" name="formDeposito">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Deposito</label>
											<input type="text" name="deposito" id="deposito" placeholder="0">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Suku Bunga</label>
											<input type="text" name="sukubunga" id="sukubunga"  value="6.5" disabled>
											
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Tenor</label>
											<select id="selTempoKredit" name="sk_waktu" class="form-control">
												<option value="1" class="">1 Bulan</option>
												<option value="3" class="">3 Bulan</option>
												<option value="6" class="">6 Bulan</option>
												<option value="12" class="">12 Bulan</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button   class="bizwheel-btn hitung-deposito">Hitung</button>
											<button   class="bizwheel-btn btn-resetDep">Reset</button>
										</div>
									</div>
								</div>
							</form>
							<br>
							<div class="col-12">
								<div class="form-group button">
									<div class="col-md-12">
										<div class="form-group">
											<h4><label for="">Hasil :</label>
											<p class="result-deposito"></p></h4>
										</div>
									</div>	
								</div>
							</div>
						</div>
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

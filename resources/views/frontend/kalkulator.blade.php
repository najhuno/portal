{{-- <div class="row" style="background: #012756;"> --}}
	<section class="Testimonials section-space">
		<div class="container">
			{{-- <div class="row"> --}}
		{{-- <div class="col-md-12"> --}}
			<!-- Contact Form -->
			<div class="contact-form-area m-top-30">
				<div class="bd-example bd-example-tabs">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h4>Simulasi Kredit</h4></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>Simulasi Deposito</h4></a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
							<br>
							{{-- <b><h5>Simulasi Kredit</h5> --}}
							<form id="formKredit" name="formKredit">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Pinjaman</label>
											<input type="text" name="plafondkredit" id="plafondkredit" placeholder="0">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Jenis Kredit</label>
											<select id="selJnsKredit" name="sk_jenis" class="form-control" onchange="setPeriodeKredit(this.value);">
												<option class="" value="1_1">Kredit Konsumtif</option>
												<option class="" value="1_2">Kredit Modal Kerja</option>
												{{-- <option class="" value="1_3">krido</option>
												<option class="" value="2_1">UMKM Annuitas</option> --}}
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Tenor</label>
											<select id="selTempoDeposito" name="sk_waktu" class="form-control">
												<option value="12" class="">12 Bulan</option>
												<option value="18" class="">18 Bulan</option>
												<option value="24" class="">24 Bulan</option>
												<option value="36" class="">36 Bulan</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button   class="bizwheel-btn hitung-kredit">Hitung</button>
											<button   class="bizwheel-btn btn-resetKredit">Reset</button>
										</div>
									</div>
								</div>
							</form>
							<br>
							<div class="col-12">
								<div class="form-group button">
									<div class="col-md-12">
										<div class="form-group">
											<h4><label for="">Angsuran :</label>
											<p class="result-kredit"></p></h4>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
			<!--/ End contact Form -->
		{{-- </div> --}}
			{{-- </div> --}}
		</div>
	</section>
{{-- </div> --}}

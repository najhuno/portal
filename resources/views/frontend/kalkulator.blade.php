{{-- <div class="row" style="background: #012756;"> --}}
		<div class="col-md-12">
			<!-- Contact Form -->
			<div class="contact-form-area m-top-30">
				<h4>Simulasi Kredit</h4>
				<form id="formKredit" name="formKredit" class="" method="">
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
									<option class="" value="1_1">KUBS</option>
									<option class="" value="1_2">Krisan</option>
									<option class="" value="1_3">krido</option>
									<option class="" value="2_1">UMKM Annuitas</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Tenor</label>
								<select id="selTempoKredit" name="sk_waktu" class="form-control">
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
			<!--/ End contact Form -->
		</div>
		
{{-- </div> --}}

	<!-- Tambah Data Nasabah -->
	<!-- Modal -->
	<div class="modal fade" id="addNasabah" role="dialog" style="top: 10%">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Mohon infokan data diri Anda</h4>
			</div>
			<form action="javascript:void(0)" id="addNasabahForm" name="addNasabahForm" class="form-horizontal" method="POST" enctype="multipart/form-data">

			<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="namanasabah" name="namanasabah" placeholder="Nama Lengkap" required="">
						</div>
					</div>  
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor NIK KTP"  required="">
						</div>
					</div>  
					<div class="form-group">
					<div class="col-sm-12">
							<input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone"  required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email" maxlength="50">
						</div>
					</div>
					<div class="form-group">
					<div class="col-sm-12">
							<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"  required="">
						</div>
					</div>
				
			</div><br>
			<div class="modal-footer">
				<div class="g-recaptcha" data-sitekey="6LerHtoaAAAAAAXaq_dJTwpndhz1JD6Vfw1HszqZ"></div>
				<i class="fa fa-info-circle"></i>
				<div class="col-md-10">
				
					<span style="font-size: 12px;"> Dengan klik 'Submit' maka Personal Banking Officer kami dapat segera  membantu Anda untuk mengajukan <h5 id="jenis_ajukan"></h5> 
					</span>
				</div>
				<button type="submit" class="btn btn-primary btn-submitNasabah" id="btn-save">Submit</button>       
			</div>
		</form>
		</div>
		</div>
	</div>
	<footer class="footer" style="background-image:url({{ asset('assets/frontend/img/map.png') }}">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								
								<h3 class="widget-title">Our Newsletter</h3>
								<p>Dapatkan informasi terbaru dari kami secara berkala</p><br />	

								<div class="footer-newsletter">
								<form action="#" method="post" class="newsletter-area">
									<input type="email" placeholder="Email">
									<button type="submit">Kirim</button>
								</form>
								</div>
							</div>		
							<!--/ End Footer About -->

							<div class="social">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a class="facebook" href="https://www.facebook.com/perumdabprkab.cirebon" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="https://www.instagram.com/bank.bkc" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="instagram" href="https://youtu.be/nrXoXg91tlc" target="_blank"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Informasi</h3>
								<ul>
									<li><a href="#">Simulasi</a></li>
									<li><a href="#">SBDK</a></li>
									<li><a href="#">Kurs &amp; Suku Bunga</a></li>
									<li><a href="#">Kebijakan Privasi</a></li>
									<li><a href="#">Syarat &amp; Ketentuan</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Apa Kabar?</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>Agustus, 2020</time></p>
										<h4 class="title"><a href="#">HUT RI Ke 75</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>Oktober, 2020</time></p>
										<h4 class="title"><a href="#">Gowes BANK BKC</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>			
							<!--/ End Footer News -->			
						</div>
						
						<div class="col-lg-3 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Kontak</h3>
								<p>Perlu respon cepat? Hubungi kami di kontak yang tersedia:</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>+62 231-661906</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@bankbkc.co.id</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>Jl. Bababkan Gebang No. 112</li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
					
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>Copyright &#169 2020 <a href="bankbkc.co.id">PERUMDA BPR Kabupaten Cirebon (BANK BKC)</a> | All right reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
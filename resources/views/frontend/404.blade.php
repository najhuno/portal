{{-- header assets --}}
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')
		<!-- Start Error Area-->
		<section class="error">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-1 col-md-6 col-12">
						<div class="error-inner">
							<h4>404</h4>
							<h2>Halaman<br>
							<span>Dalam Pembangunan</span></h2>
							<p>Kami sedang mengerjakan beberapa konten terbaru, tetaplah bersama kami.</p>
							<div class="button">
								<a href="index.php" class="bizwheel-btn"><i class="fa fa-long-arrow-left"></i>Balik lagi..</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<img src="{{ asset('assets/frontend/img/error-img.png') }}" alt="#">
					</div>
				</div>
			</div>
		</section>
		<!--/ End Error Area-->

<!-- Footer -->
@include('frontend.layout.footer')
{{-- footer assets --}}
@include('frontend.layout.footerasset')

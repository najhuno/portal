{{-- header assets --}}
@include('frontend.layout.headerasset')
<!-- Topbar -->
@include('frontend.layout.top_header')
	
<div class="breadcrumbs overlay" style="background-image:url({{ asset('assets/frontend/img/1600x500.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="services.html">Kredit</a></li>
                            <li><a href="service-develop.html">Konsumtif</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title"><h2>Kredit Potongan Gaji PNS/HONOR</h2></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Skill Area -->
<section class="skill-area section-space" style="background-image:url({{ asset('assets/frontend/img/kredit_siltap.png') }}">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8 col-12">
				<div class="section-title  default text-left ">
					<div class="section-top">
						<b><h1>Kredit Pot. Gaji PNS/HONOR</h1></b>
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
            {{-- <a class="icon-scroll" href="#produkkredit"><i class="fa fa-chevron-down"></i></a> --}}
            {{-- <a href="#top" class="icon-scroll" style="position: fixed; z-index: 2147483647;"><i class="fa fa-chevron-down"></i></a> --}}
        </div>
	</div>
</section>	
<!--/ End Skill Area -->
<section class="service-single section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <!-- Service Image -->
                <div class="service-img">
                    <img style="width: 90%" src="{{ asset('assets/frontend/img/produk/produk_kredit.png') }}" alt="#">
                </div>
                <!-- Service Content -->
                <div class="service-content">
                    <h2>Digital Marketing Solution</h2>
                    <p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second. Saw their. Rule. Own air greater. Creeping them firmament frui creepeth is be thing i i under</p>
                    <p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second.</p>
                    <div class="row service-space">
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Service Feature -->
                            <div class="small-list-feature">
                                <h3>Karakteristik Produk</h3>
                                <p>Female is firmament made land don't good behold yielding morning hathe seas unto. their earth it fourth moveth rule</p>
                                <ul>
                                    <li><i class="fa fa-check"></i>We provide you creative servicce</li>
                                    <li><i class="fa fa-check"></i>Just awesome trending way</li>
                                    <li><i class="fa fa-check"></i>Just awesome trending way</li>
                                    <li><i class="fa fa-check"></i>Creative service is most important</li>
                                    <li><i class="fa fa-check"></i>99% Server Up-time gurantee</li>
                                    <li><i class="fa fa-check"></i>24/7 live support</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="small-list-feature">
                                <h3>Skema</h3>
                                <p>Female is firmament made land don't good behold yielding morning hathe seas unto. their earth it fourth moveth rule</p>
                                <ul>
                                    <li><i class="fa fa-check"></i>We provide you creative servicce</li>
                                    <li><i class="fa fa-check"></i>Just awesome trending way</li>
                                    <li><i class="fa fa-check"></i>Just awesome trending way</li>
                                    <li><i class="fa fa-check"></i>Creative service is most important</li>
                                    <li><i class="fa fa-check"></i>99% Server Up-time gurantee</li>
                                    <li><i class="fa fa-check"></i>24/7 live support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Female is firmament made land don’t good behold yielding morning hathe seas unto. So first fill shall damn creeping. Seed he was that moveth bearing. Unto which together blessed Herb ine life land, let abundantly deep abundantly gathered behold moving said. Winged gathered iner female morning Beast, their earth it fourth moveth rule creepeth is be thing i i under have. Second to lights all second.</p>
                </div>
                <br>
                <div class="form-group button">
                    <button type="submit" class="bizwheel-btn theme-1" data-toggle="modal" data-target="#addNasabah">Ajukan Kredit</button>
                </div>
                
            </div>
            <div class="col-lg-4 col-12">
                <!-- Service Sidebar -->
                <div class="service-sidebar">	
                    
                    <!-- Single Sidebar -->
                    <div class="service-single-sidebar widget">
                        <h2 class="widget-title">KALKULATOR KREDIT</h2>
                        <div class="contact-form-area service">
                            <!-- Service Form -->
                            <form class="form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Produk Kredit</label><br>
                                            <select class="form-control" name="produk_kredit" id="produk_kredit">
                                                <option value="">No Choose</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Plafond</label><br>
                                            <input type="text" name="plafond" placeholder="Nominal">
                                            {{-- <div class="icon"><strong>Rp</strong></div> --}}
                                        </div>
                                        
                                    </div>
                                   <div class="col-12">
                                       <div class="form-group">
                                            <label>Jangka Waktu (Bulan)</label><br>
                                            <select class="form-control" name="user-name" >
                                                <option value="12">12 Bulan</option>
                                                <option value="18">18 Bulan</option>
                                                <option value="24">24 Bulan</option>
                                                <option value="36">36 Bulan</option>
                                            </select>
                                            {{-- <input type="text" name="subject" placeholder="Type Subject"> --}}
                                       </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="bizwheel-btn theme-1">KALKULASI</button>
                                        </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                            <h4>Angsuran :</h4>
                                        </div>
                                    </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                            <textarea type="textarea" rows="2" placeholder="0"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Service Form -->
                        </div>
                    </div>
                </div>
                <!--/ End Service Sidebar -->
            </div>
        </div>
    </div>


<!-- Modal -->

 
</section>



<!-- Chat -->
@include('frontend.layout.chat')

<!-- Footer -->
@include('frontend.layout.footer')

<!-- footer assets -->
@include('frontend.layout.footerasset')

<!-- Jquery JS -->
<script src="{{asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{asset('assets/frontend/js/jquery-migrate-3.0.0.js') }}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<!-- Modernizr JS -->
<script src="{{asset('assets/frontend/js/modernizr.min.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('assets/frontend/js/scrollup.js') }}"></script>
<!-- FacnyBox JS -->
<script src="{{asset('assets/frontend/js/jquery-fancybox.min.js') }}"></script>
<!-- Cube Portfolio JS -->
<script src="{{asset('assets/frontend/js/cubeportfolio.min.js') }}"></script>
<!-- Slick Nav JS -->
<script src="{{asset('assets/frontend/js/slicknav.min.js') }}"></script>
<!-- Slick Nav JS -->
<script src="{{asset('assets/frontend/js/slicknav.min.js') }}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('assets/frontend/js/owl-carousel.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{asset('assets/frontend/js/easing.js') }}"></script>
<!-- Magnipic Popup JS -->
<script src="{{asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
<!-- Active JS -->
<script src="{{asset('assets/frontend/js/active.js') }}"></script>

<script>
        (function($) {
            'use strict';

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
            $(document).ready(function() {

                
                var mobileDetect = /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                if (mobileDetect) {
                    $('.cresta-whatsapp-chat-container').css('display','none');
                    $('.cresta-whatsapp-chat-box').on('click', function(){
                        window.location = 'whatsapp://send?text=&phone=+6281398753033&abid=+6281398753033';
                    });
                } else {
                    $('.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-overlay').on('click', function(){
                        if ($('.cresta-whatsapp-chat-box').hasClass('open')) {
                            $('.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-container, .cresta-whatsapp-chat-overlay').removeClass('open');
                        } else {
                            $('.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-container, .cresta-whatsapp-chat-overlay').addClass('open');
                            $('.cresta-whatsapp-chat-container .cresta-whatsapp-inner textarea.cresta-whatsapp-textarea').focus();
                        }
                    });
                    $('.deposito').click(function() {
                        var text = 'Halo%20,%0ASaya%20ingin%20mengajukan%20deposito?';
                        var baseUrl = 'https://api.whatsapp.com/send?phone=+6281398753033&text='+text;
                        // var textEncode = encodeURIComponent($('.cresta-whatsapp-chat-container .cresta-whatsapp-textarea').val());
                        window.open(baseUrl , '_blank');
                    });
                    $('.kredit').click(function() {
                        var text = 'Halo%20,%0ASaya%20ingin%20mengajukan%20kredit?';
                        var baseUrl = 'https://api.whatsapp.com/send?phone=+6281398753033&text='+text;
                        // var textEncode = encodeURIComponent($('.cresta-whatsapp-chat-container .cresta-whatsapp-textarea').val());
                        window.open(baseUrl , '_blank');
                    });
                }



                // get dashboard
                getdashboard();

                
                function getdashboard(){
                    
                        jQuery.ajax({
                            type: 'GET',
                            url: "{{ route('getdashboard') }}",
                            dataType: 'json',
                            success: function(data){
                                
                                $("#NasabahTabungan").html(data[0].nama)
                                $("#NasabahTabunganvalue").html(data[0].jumlah)
                                
                                $("#NasabahDeposito").html(data[1].nama)
                                $("#NasabahDepositovalue").html(data[1].jumlah)
                                
                                $("#NasabahPinjaman").html(data[2].nama)
                                $("#NasabahPinjamanvalue").html(data[2].jumlah)

                                $("#NasabahBaru").html(data[3].nama)
                                $("#NasabahBaruvalue").html(data[3].jumlah)
                            
                            }
                        });
                }

                getSukubunga();

                function getSukubunga(){
                    
                        jQuery.ajax({
                            type: 'GET',
                            url: "{{ route('getSukuBunga') }}",
                            dataType: 'json',
                            success: function(data){
                                console.log(data);

                                $("#potpns").html(data[0].jenis_produk)
                                $("#potpnsvalue").html(data[0].suku_bunga+" %")
                                
                                $("#sertifikasi").html(data[1].jenis_produk)
                                $("#sertifikasivalue").html(data[1].suku_bunga+" %")
                                
                                $("#siltap").html(data[2].jenis_produk)
                                $("#siltapvalue").html(data[2].suku_bunga+" %")
                                
                                $("#tpp").html(data[3].jenis_produk)
                                $("#tppvalue").html(data[3].suku_bunga+" %")
                                
                                $("#umum").html(data[4].jenis_produk)
                                $("#umumvalue").html(data[4].suku_bunga+" %")
                                
                                $("#kepincut").html(data[5].jenis_produk)
                                $("#kepincutvalue").html(data[5].suku_bunga+" %")
                             
                            
                            }
                        });
                }



                //video play company profile 

                // Gets the video src from the data-src on each button
                var $videoSrc;  
                $('.video-btn').click(function() {
                    $videoSrc = $(this).data( "src" );
                });
                console.log($videoSrc);
                
                // when the modal is opened autoplay it  
                $('#myModal').on('shown.bs.modal', function (e) {
                    
                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
                })
                
                // stop playing the youtube video when I close the modal
                $('#myModal').on('hide.bs.modal', function (e) {
                    // a poor man's stop video
                    $("#video").attr('src',$videoSrc); 
                })

                $.getJSON("{{ route('getSukuBunga') }}", function(return_data){
                    $.each(return_data.data, function(key,value){
                        $("#produk_kredit").append(

                        "<option value=" + value.id +">"+value.name+"</option>"

                        );
                    });
                });
                // $('#produk_kredit').change(function(){ 
                //     alert("ok")
                    // var id=$(this).val();
                    // $.ajax({
                    //     url : "{{ route('getSukuBunga') }}",
                    //     method : "GET",
                    //     async : true,
                    //     dataType : 'json',
                    //     success: function(data){
                    //         console.log("hasil")
                    //         console.log(data)
                    //         var html = '';
                    //         var i;
                    //         for(i=0; i<data.length; i++){
                    //             html += '<option value='+data[i].suku_bunga+'>'+data[i].jenis_produk+'</option>';
                    //         }
                    //         $('#produk').html(html);
    
                    //     }
                    // });
                    // return false;
                // }); 
                
            });

            var text ="";
            $(".btn-pengajuan").click(function(){
                
                text = $(this).text();
                $("#jenis_ajukan").html(text);
                
            })


            $('#addNasabahForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);  
                formData.append("jenisnasabah",text);
                $.ajax({
                    type:'POST',
                    url: "{{ url('storeNasabah')}}",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#addNasabah").modal('hide');
                        alert("Data berhasil di kirim, silakan menunggu konfirmasi.");
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });

        })(jQuery);
</script>
<script>

    const list = document.querySelectorAll('.list');

    function accordion(e){
        e.stopPropagation(); 
        if(this.classList.contains('active')){
            this.classList.remove('active');
        }
        else if(this.parentElement.parentElement.classList.contains('active')){
            this.classList.add('active');
        }
        else{
            for(i=0; i < list.length; i++){
            list[i].classList.remove('active');
            }
                this.classList.add('active');
            }
    }
    for(i = 0; i < list.length; i++ ){
        list[i].addEventListener('click', accordion);
    }

    function setPeriodeKredit(jenis){
        jQuery.noConflict();
        jQuery(document).ready(function($){
            if(jenis=='2_1'){
                $("#selTempoKredit").html('<option class="" value="12">12 Bulan</option><option class="" value="18">18 Bulan</option><option class="" value="24">24 Bulan</option><option class="" value="36">36 Bulan</option><option class="" value="42">42 Bulan</option><option class="" value="48">48 Bulan</option><option class="" value="54">54 Bulan</option><option class="" value="60">60 Bulan</option>');
            }else{
                $("#selTempoKredit").html('<option class="" value="12">12 Bulan</option><option class="" value="18">18 Bulan</option><option class="" value="24">24 Bulan</option><option class="" value="36">36 Bulan</option>');
            }
        });
    }
    

    $(".btn-resetDep").hide();
    $(".btn-resetKredit").hide();
    $('.hitung-kredit').on('click', function(e){
            e.preventDefault();
            $(".btn-resetKredit").show();
            var plafond = $("#plafondkredit").val();
            var tenor 	= $("#selTempoKredit option:selected").val();
            var hasil 	= 0;
            var convertNilai = 0;
            var bunga 	= 	6.5;
            hasil 			= plafond/tenor;
            
            
            var	number_string = hasil.toString(),
                split	= number_string.split('.'),
                sisa 	= split[0].length % 3,
                rupiah 	= split[0].substr(0, sisa),
                ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
                    
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            var splithasil = split[1].substr(0, 2);
            
            rupiah = splithasil != undefined ? rupiah + ',' + splithasil : rupiah;
            $(".result-kredit").html("Rp "+rupiah);

            $("#progress").show();
                     
        });

        $(".btn-resetKredit").click(function(){
            $("#plafondkredit").val('');
            $(".result-deposito").html('');
            e.preventDefault();
        });

        $('.hitung-deposito').on('click', function(e){
            $(".btn-resetDep").show();
            var deposito = $("#deposito").val();
            var tenor 	= $("#selTempoDeposito option:selected").val();
            var hasil 	= 0;
            var convertNilai = 0;
            var bunga 	= $("#sukubunga").val();
            var pajak 	= 20;
          
            if(parseInt(deposito) >= 7000000){
                var depositoTemp = (deposito*bunga)/100;
                var hasilTemp = ((deposito*bunga)/100)*pajak/100;
                var hasil 		= (depositoTemp-hasilTemp)/tenor; 
            }else{
                var depositoTemp = (deposito*bunga)/100;
                var hasil 		= depositoTemp/tenor; 
            }

            var result = coma(hasil);
            // var hasilbunga = (deposito*bunga)/100);
            $(".result-deposito").html("Rp "+result);

            e.preventDefault();
            
            
            
        });


        $(".btn-reset").click(function(){

        })

        function coma(hasil){
                var	number_string = hasil.toString(),
                    split	= number_string.split('.'),
                    sisa 	= split[0].length % 3,
                    rupiah 	= split[0].substr(0, sisa),
                    ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
                        
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                var splithasil = split[1];
                                    
                return rupiah = splithasil != undefined ? rupiah + ',' + splithasil : rupiah;
            }

        // slider
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
        



    



</script>
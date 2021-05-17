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
                                console.log(data);
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

    

</script>
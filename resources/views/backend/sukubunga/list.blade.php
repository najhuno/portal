@extends('adminlte::page')

@section('title', 'Dashboard')

@livewireStyles
<link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css')}}" >
<link  href="{{ asset('assets/backend/css/jquery.dataTables.min.css') }}" rel="stylesheet">

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                {{ $title }}
            </h3>
            <div class="card-tools">
                <div class="btn-group">
                    <div class="pull-right mb-2">
                        <a class="btn btn-primary" onClick="add()" href="javascript:void(0)"> Create {{ $title }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Jenis Produk</th>
                        <th>Produk</th>
                        <th>Suku Bunga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- boostrap company model -->
<div class="modal fade" id="company-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title" id="CompanyModal"></h4></div>
                <div class="modal-body">
                <form action="javascript:void(0)" id="CompanyForm" name="CompanyForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-12">
                            <select name="jenis" class="form-control">
                                <option value="Potong Gaji PNS/HONOR">Potong Gaji PNS/HONOR (kredit)</option>
                                <option value="Sertifikasi">Sertifikasi (kredit)</option>
                                <option value="SILTap">SILTap (kredit)</option>
                                <option value="TPP">TPP (kredit)</option>
                                <option value="Perdagangan Umum">Perdagangan Umum (kredit)</option>
                                <option value="Kepincut Pasar">Kepincut Pasar (kredit)</option>
                                <option value="Deposito">Deposito (deposito)</option>
                            </select>
                            
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Produk</label>
                        <div class="col-sm-12">
                            {{-- <input type="text" class="form-control" id="produk" name="produk" placeholder="Masukan nama produk" maxlength="50" required=""> --}}
                            <select name="produk" class="form-control">
                                <option value="kredit">Kredit</option>
                                <option value="deposito">Deposito</option>
                                <option value="tabungan">Tabungan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Suku Bunga</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="sukubunga" name="sukubunga" placeholder="Masukan suku bunga" maxlength="50" required="">
                        </div>
                    </div>                    
                    
                    
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save">Save changes</button>
                    </div>
                    </form>
                </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
    <!-- end bootstrap model -->
@stop

@section('js')
<script src="{{ asset('assets/backend/js/jquery-3.5.1.min.js') }} "></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}  "></script>
<script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
<!-- Sweetalert JS -->
<script src="{{asset('assets/backend/js/sweetalert.min.js') }}"></script>

@livewireScripts

@include('backend.alert.app')

    <script> console.log('gooo!'); 

    $(document).ready(function(){

        $(".url").hide();

        $("#button").change(function(){
            var a = this;
            console.log(a);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#preview-image-before-upload').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
        
        
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('backend/sukubunga') }}",
            columns: [
            { data: 'id', name: 'id' },
            { data: 'jenis_produk', name: 'Jenis Produk' },
            { data: 'nama_produk', name: 'Produk' },
            { data: 'suku_bunga', name: 'Suku Bunga' },
            {data: 'Aksi', name: 'Aksi', orderable: false},
            ],
            order: [[0, 'desc']]
        });


    })

        $('#CompanyForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);  
            $.ajax({
                type:'POST',
                url: "{{ url('backend/store-sukubunga')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#company-modal").modal('hide');
                    alert("Sukses data tersimpan.")
                    var oTable = $('#myTable').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save"). attr("disabled", false);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });

        function add(){
            $('#CompanyForm').trigger("reset");
            $('#CompanyModal').html("Add {{$title}}");
            $('#company-modal').modal('show');
            $('#id').val('');
        } 

        function editFunc(id){
            $.ajax({
                type:"POST",
                url: "{{ url('backend/edit-sukubunga') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#CompanyModal').html("Edit {{$title}}");
                    $('#company-modal').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#address').val(res.address);
                    $('#email').val(res.email);
                }
            });
        }  

        function deleteFunc(id){
            if (confirm("Apakah anda akan menghapus data ini?") == true) {
            var id = id;
            // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ url('backend/delete-sukubunga') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(res){
                        var oTable = $('#myTable').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        }
        
    </script>

@stop
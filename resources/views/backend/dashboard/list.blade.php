@extends('adminlte::page')

@section('title', 'Dashboard')
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
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Catatan Kecil</th>
                        <th>Tambahkan Button</th>
                        <th>Url</th>
                        <th>Gambar</th>
                        <th>Path</th>
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
                        <label for="name" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Content" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Isi</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="isi" name="isi" placeholder="Enter Isi Content" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tambahkan Link</label>
                        <div class="col-sm-12">
                            {{-- <input type="text" class="form-control" id="button" name="button" placeholder="Masukan Nama Tombol" required=""> --}}
                            <select class="form-control" id="button" name="button">
                                <option value="1">Iya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group url">
                        <label class="col-sm-2 control-label">Url</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="button" name="button" placeholder="Masukan Nama Tombol" required="">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload</label>
                        <div class="col-md-12">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
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
@endsection
@section('js')
<script src="{{ asset('assets/backend/js/jquery-3.5.1.min.js') }} "></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}  "></script>
<script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>

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
            ajax: "{{ url('backend/contentutama') }}",
            columns: [
            { data: 'id', name: 'id' },
            { data: 'judul', name: 'judul' },
            { data: 'isi', name: 'isi' },
            { data: 'catatankecil', name: 'catatankecil' },
            { data: 'button', name: 'button' },
            { data: 'url', name: 'url' },
            { data: 'namagambar', name: 'namagambar' },
            { data: 'path', name: 'path' },
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
                url: "{{ url('backend/store-content')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#company-modal").modal('hide');
                    var oTable = $('#ajax-crud-datatable').dataTable();
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
                url: "{{ url('backend/edit-content') }}",
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
            if (confirm("Apakah anda akan menghapus content ini?") == true) {
            var id = id;
            // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ url('backend/delete-content') }}",
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
@extends('backend.layout.app')
@section('head')
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                {!! $title !!}
            </h3>
           
        </div>
        <div class="card-body">
            <div class="card-tools" style="text-align: right;">
                <div class="btn-group">
                    <button class="btn btn-primary btn-md btnTambahBagian">
                        <i class="fas fa-plus"></i> 
                    </button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-success btn-md btnDoc" >
                        <i class="fas fa-file"></i> 
                    </button>
                </div>
            </div>
            <hr>
            <div class="box-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document" style="max-width: 50%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <form id="formBagian">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Id</label>
                                        <input oninput="this.value" type="text"
                                               id="id" name="id"
                                               class="form-control form-control-md"
                                                readonly>
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Kode Bagian</label>
                                        <input oninput="this.value" type="text"
                                               id="kode" name="kode"
                                               class="form-control form-control-md"
                                               placeholder="Masukan Kode Bagian">
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Bagian</label>
                                        <input oninput="this.value" type="text"
                                               id="bagian" name="bagian"
                                               class="form-control form-control-md"
                                               placeholder="Masukan Bagian">
                                      
                                    </div>
                                 </div>
                                 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Batal
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')


@section('content')
<div class="col-md-12">
        <div class="card">
            <form action="{{ route('user.store')}}" method="POST">
                <div class="card-header">
                    <h3 class="card-title">
                        Data User
                    </h3>
                    <div class="card-tools">
                        <div class="btn-group">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-save"></i>
                            </button>
                            <a href="{{ route('user.index')}}" class="btn btn-danger btn-sm">
                                <i class="fas fa-times-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pegawai->nama }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ $pegawai->user['email'] }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option @if($pegawai->role_id == '2') ? {{ 'selected'}} : {{''}} @endif value="admin">Admin</option>
                                    <option @if($pegawai->role_id == '1') ? {{ 'selected'}} : {{''}} @endif value="superadmin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop



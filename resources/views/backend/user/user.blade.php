@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                User
            </h3>
            <div class="card-tools">
                <div class="btn-group">
                    <a class="btn btn-info btn-sm" href="{{ route('user.create') }}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aris</td>
                        <td>sunjayaaris@gmail.com</td>
                        <td>Admin</td>
                        <td class="d-flex align-items-center">
                            <div class="btn-group d-flex align-items-center">
                                <a class="btn btn-info btn-sm" href="{{ route('user.edit',['id' => 'Aris'])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
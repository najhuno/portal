@extends('adminlte::page')

@section('title', 'Dashboard')


<link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css')}}" >
<link  href="{{ asset('assets/backend/css/jquery.dataTables.min.css') }}" rel="stylesheet">


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
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ isset($item->user['email']) ? $item->user['email'] : "" }}</td>
                            <td>{{ isset($item->user['name']) ? $item->user['name'] : "" }}</td>
                            <td>{{ $item->posisi_pekerjaan }}</td>
                            <td class="d-flex align-items-center">
                                <div class="btn-group d-flex align-items-center">
                                    <a class="btn btn-info btn-sm" href="{{ route('user.edit',['id' => $item->id ])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script> console.log('gooo!'); </script>
@stop
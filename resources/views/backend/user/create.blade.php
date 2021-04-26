@section('title', 'Dashboard')

@section('content_header')
    <h1>User</h1>
@stop

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
                            <a href="{{ route('user.home')}}" class="btn btn-danger btn-sm">
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
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
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
                                    <option value="admin">Super Admin</option>
                                    <option value="superadmin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
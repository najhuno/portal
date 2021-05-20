<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="" rel="stylesheet" type="text/css" /> --}}
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nik</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data ?? '' as $datas)
                <tr>
                    <th scope="row">{{ $datas->id }}</th>
                    <td>{{ $datas->namalengkap }}</td>
                    <td>{{ $datas->nik }}</td>
                    <td>{{ $datas->nohp }}</td>
                    <td>{{ $datas->email }}</td>
                    <td>{{ $datas->alamat }}</td>
                    <td>{{ $datas->pengajuan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>
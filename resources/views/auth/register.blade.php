<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/login/css/font-awesome.min.css') }}">

<style>
    .input input {
        width: 100%;
        padding: 13px 10px 13px 34px;
        display: block;
        border: none;
        border: 1px solid #1cc7d0;
        color: #000;
        box-sizing: border-box;
        font-size: 13px;
        outline: none;
        letter-spacing: 1px;
        background: #fff;
        -webkit-box-shadow: 2px 5px 16px 2px rgb(16 16 16 / 18%);
        -moz-box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, 0.18);
        box-shadow: 2px 5px 16px 2px rgb(16 16 16 / 18%);
    }
    </style>

</head>

<body class="main-bg">
	<div>
		<!-- title -->
		<h1></h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="" />
                </div>
                    <form action="{{ route('register') }}" method="post">
                        @csrf   
                        <p class="legend">Register Here<span class="fa fa-hand-o-down"></span></p>
                        <div class="input">
                            <input type="text" placeholder="Nama" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="input">
                            <input type="posisi_pekerjaan" placeholder="Posisi Pekerjaan" class="@error('posisi_pekerjaan') is-invalid @enderror" value="{{ old('posisi_pekerjaan') }}" name="posisi_pekerjaan" required="">
                            <span class="fa fa-vcard"></span>
                        </div>
                        <div class="input">
                            <input type="email" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required="">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="input">
                            <input id="password" placeholder="Password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span class="fa fa-lock"></span>
                        </div>
                        <div class="input">
                            <input id="password-confirm" placeholder="Password Confirm" type="password"  name="password_confirmation" required autocomplete="new-password">     
                            <span class="fa fa-lock"></span>
                        </div>
                        <div class="input">
                            <select id="role_id" name="role_id" required class="form-control" style="width: 100%;padding: 13px 10px 13px 34px;display: block;border: 1px solid #1cc7d0;color: #000;box-sizing: border-box;font-size: 13px;">
                                <option value="1">Superadmin</option>
                                <option value="2">Admin</option>
                            </select>
                            <span class="fa fa-gear"></span>
                        </div>

    
                        @error('email') 
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        <button type="submit" class="btn submit">
                            <span class="fa fa-sign-in"></span>
                        </button>
                       
                    </form>
            </div>
        </div>
    </div>
</body>

</html>


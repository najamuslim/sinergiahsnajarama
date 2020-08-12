@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Registration Form - Sinergia Homeschooling</title>
    <style>
        .headregistration{
            width: 100%;
            color: white;
            background-color: #ea9400;
            padding: 2% 0;
            position: relative;
            line-height: 0.25em;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 30px;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            margin-top: 95px;
        }
        .form{
            padding: 29px 0;    
        }

        .form p{
            text-align: left;
        }

        #btn-regis:hover{
            background-color: #ea9400;
            color: #ffffff;
        }

        #btn-regis{
            width: 100%; color: #ea9400; border-color: #ea9400;
        }

        .error p{
            color: red;
        }

        .form-control.error{
            border-color: red;
        }

    </style>
</head>
@section('content')


<div class="headregistration">
    <p style="margin-top: 45px; margin-left: 25px;">Registration Form</p>
</div>
<div class="container">
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <div class="form" style="text-align: center;">
    <form method="POST" action="submit">
            @csrf
            <p>Nama Lengkap :<input type="text" name="nama_lengkap" class="form-control {{ $errors->has('nama_lengkap') ? 'error' : '' }}" placeholder="Nama Lengkap"></p>
            @if ($errors->has('nama_lengkap'))
                <div class="error">
                    <p>Mohon mengisi nama lengkap anda</p>
                </div>
            @endif
            <p>Kelas :<input type="text" name="kelas" class="form-control {{ $errors->has('kelas') ? 'error' : '' }}" placeholder="Kelas"></p>
            @if ($errors->has('kelas'))
                <div class="error">
                    <p>Mohon mengisi kelas anda</p>
                </div>
            @endif
            <p>NISN :<input type="text" name="nisn" class="form-control {{ $errors->has('nisn') ? 'error' : '' }}" placeholder="NISN"></p>
            @if ($errors->has('nisn'))
                <div class="error">
                    <p>Mohon mengisi kelas anda</p>
                </div>
            @endif
            <p>Sekolah Sebelumnya :<input type="text" name="sekolah_sebelumnya" class="form-control {{ $errors->has('sekolah_sebelumnya') ? 'error' : '' }}" placeholder="Sekolah Sebelumnya"></p>
            @if ($errors->has('sekolah_sebelumnya'))
                <div class="error">
                    <p>Mohon mengisi sekolah sebelum anda</p>
                </div>
            @endif
            <p>Alasan Homeshooling :<input type="text" name="alasan_homeschooling" class="form-control {{ $errors->has('alasan_homeschooling') ? 'error' : '' }}" placeholder="Alasan Homeshooling"></p>
            @if ($errors->has('alasan_homeschooling'))
                <div class="error">
                    <p>Mohon mengisi alasan homeschooling anda</p>
                </div>
            @endif
            <p>Nomor HP Yang Bisa Dihubungi :<input type="text" name="no_hp" class="form-control {{ $errors->has('no_hp') ? 'error' : '' }}" placeholder="Nomor HP Yang Bisa Dihubungi"></p>
            @if ($errors->has('no_hp'))
                <div class="error">
                    <p>Mohon mengisi nomor hp anda</p>
                </div>
            @endif
            <button id="btn-regis" type="submit" class="btn btn-outline-warning">Submit</button>
        </form>
    </div>
</div>


@endsection
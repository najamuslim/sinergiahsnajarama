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

    </style>
</head>
@section('content')


<div class="headregistration">
    <p style="margin-top: 45px; margin-left: 25px;">Registration Form</p>
</div>
<div class="container">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-danger">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <div class="form" style="text-align: center;">
    <form method="POST" action="submit">
            @csrf
            <p>Nama Lengkap :<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"></p>
            <p>Kelas :<input type="text" name="kelas" class="form-control" placeholder="Kelas"></p>
            <p>NISN :<input type="text" name="nisn" class="form-control" placeholder="NISN"></p>
            <p>Sekolah Sebelumnya :<input type="text" name="sekolah_sebelumnya" class="form-control" placeholder="Sekolah Sebelumnya"></p>
            <p>Alasan Homeshooling :<input type="text" name="alasan_homeschooling" class="form-control" placeholder="Alasan Homeshooling"></p>
            <p>Nomor HP Yang Bisa Dihubungi :<input type="text" name="no_hp" class="form-control" placeholder="Nomor HP Yang Bisa Dihubungi"></p>
            <button id="btn-regis" type="submit" class="btn btn-outline-warning">Submit</button>
        </form>
    </div>
</div>


@endsection
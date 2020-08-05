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
    <div class="form" style="text-align: center;">
        <form>
            <p>Nama Lengkap :<input type="text" class="form-control" value="Nama Lengkap"></p>
            <p>Kelas :<input type="text" class="form-control" value="Kelas"></p>
            <p>NISN :<input type="email" class="form-control" value="NISN"></p>
            <p>Sekolah Sebelumnya :<input type="text" class="form-control" value="Sekolah Sebelumnya"></p>
            <p>Alasan Homeshooling :<input type="text" class="form-control" value="Alasan Homeshooling"></p>
            <p>Nomor HP Yang Bisa Dihubungi :<input type="email" class="form-control" value="Nomor HP Yang Bisa Dihubungi"></p>
            <button id="btn-regis" type="button" class="btn btn-outline-warning">Submit</button>
        </form>
    </div>
</div>


@endsection
@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>List Registrant - Sinergia Homeschooling</title>
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
    </style>
</head>
@section('content')


<div class="headregistration">
    <p style="margin-top: 45px; margin-left: 25px;">List Registrant</p>
</div>

<div class="container" style="margin-top: 25px;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Kelas</th>
                <th scope="col">NISN</th>
                <th scope="col">Sekolah Sebelumnya</th>
                <th scope="col">Alasan Homeschooling</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">tanggal pendaftaran</th>
            </tr>
        </thead>


        @foreach($registrants as $index => $registrant)
            <tr>
                <td>{{ $registrants->firstItem() + $index }}</td>
                <td>{{ $registrant->nama_lengkap }}</td>
                <td>{{ $registrant->kelas }}</td>
                <td>{{ $registrant->nisn }}</td>
                <td>{{ $registrant->sekolah_sebelumnya }}</td>
                <td>{{ $registrant->alasan_homeschooling }}</td>
                <td>{{ $registrant->no_hp }}</td>
                <td>{{ $registrant->created_at }}</td>
            </tr>
        @endforeach
    </table>
    {{ $registrants->links() }}

</div>

@endsection
@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Home - Sinergia Homeschooling</title>
</head>

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}"/>
@stop

@section('content')

<div class="container" style="text-align: center;">
            <a href="https://bit.ly/sinergia_registration">
                <img style="height: 100%; width: 50%;" src="{{ asset('images/poster sinergia final-01.jpg') }}" alt="poster sinergia regsitration">
            </a>
</div>

@endsection

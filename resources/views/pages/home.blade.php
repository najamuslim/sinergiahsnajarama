<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home - Sinergia Homeschooling</title>
    @extends('layout.head')
</head>

<body>
@include('layout.header')

@section('content')
<div class="container">
            <a href="https://bit.ly/sinergia_registration">
                <img src="{{ asset('images/poster sinergia final-01.jpg') }}" alt="poster sinergia regsitration">
            </a>
</div>

@endsection

@include('layout.footer')

</body>

</html>
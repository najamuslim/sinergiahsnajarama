<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .btn-like{
            display: block;
            /*margin: 40px auto 0px;*/
            text-align: center;
            background: #ed2553;
            border-radius: 3px;
            box-shadow: 0 10px 20px -8px rgb(240, 75, 113);
            padding: 10px 17px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            outline: none;
            color: #ffffff;
            text-decoration: none;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }
    </style>
</head>
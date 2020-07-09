@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Register Now to Admission - Sinergia Homeschooling</title>
    <style>
        .headadmission{
            width: 100%;
            color: white;
            background-color: #ea9400;
            padding: 2% 0;
            position: relative;
            line-height: 1.9em;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 38px;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
        }
        .imgadmission{
            padding: 29px 0;    
        }
        .btnadmission{
            color: #ffffff;
            background: #f42707;
            letter-spacing: 0px;
            font-size: 20px;
            border: 2px solid;
            padding: 0.3em 1em;
            line-height: 1.7em;
            text-align: center;
            width: 8em;
        }
    </style>
</head>
@section('content')


<div class="headadmission">
    <p>How to Register Sinergia Homeschooling</p>
</div>
<div class="imgadmission" style="text-align: center;">
    <img  src="{{ asset('images/admission.png') }}" alt="admission image">
</div>
<div class="container" style="text-align: center;">
    <div class="btnadmission" data-icon="9">
        JOIN NOW
    </div>
</div>


@endsection
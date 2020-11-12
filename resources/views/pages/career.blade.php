@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Home School Career - Sinergia Homeschooling</title>
    <style>
        .headadmission{
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
        .btnadmission:hover{
            color:#ffffff;
            text-decoration:none;
        }
        .card-columns{
            margin: 20 60 20 60;
        }
    </style>
</head>
@section('content')


<div class="headadmission">
    <p style="margin-top: 45px; margin-left: 25px;">CAREER</p>
</div>

<div class="card-columns">

@foreach($careers as $career)

<div class="card">
<a href="{{ route('show.content', [$career->id]) }}">
    <img class="card-img-top" src="{{ asset('images/career.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{!! "$career->title" !!} </h5>
      <p class="card-text" style="color: gray">{!! "$career->created_at" !!}| {!! "$career->category" !!}</p>
      <p class="card-text" style="color: gray">{!! "$career->short_description" !!}</p>
    </div>
</a>
</div>

@endforeach

</div>




@endsection
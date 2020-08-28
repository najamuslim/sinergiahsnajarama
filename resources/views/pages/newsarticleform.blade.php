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
    <p style="margin-top: 45px; margin-left: 25px;">Create a new post</p>
</div>
<div class="container">
    <div class="form" style="text-align: center;">
    <form method="POST" action="submit">
            @csrf
            <p>Title :<input type="text" name="title" class="form-control " placeholder="Title"></p>
            <p>Content :<textarea type="textarea" name="content" class="form-control" minlength="5" maxlength="2000" required rows="10" placeholder="Content"></textarea></p>
            <p>Category :
                <select name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="news">News</option>
                    <option value="article">Article</option>
                </select>
            </p>
            <button id="btn-regis" type="submit" class="btn btn-outline-warning">Submit</button>
        </form>
    </div>
</div>


@endsection
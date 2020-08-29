@extends('layout.app')
<head>
<link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
<title>Home - Sinergia Homeschooling</title>
<style>
    #programmes{
        background-color: #19065e;
        padding: 29px 0;
    }
    #programmes .row_programmes{
        position: relative;
        width: 80%;
        max-width: 1174px;
        margin: auto;
    }
    #programmes .row_programmes_1{
        background: center;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-size: 33px;
        padding: 0px 0;
    }
    #programmes .row_programmes_2, #programmes .row_programmes_3{
        text-align: center;
        padding-top: 60px;
        max-width: 1080px;
        margin: auto;
    }

    .menu_programmes{
        display:inline-block;
        width: 20%;
        background-position: center;
        margin-bottom: 9.27%;
        text-align: center;
        margin-bottom: 0;
    }
    .menu_programmes_1,
    .menu_programmes_2,
    .menu_programmes_4,
    .menu_programmes_5{
        margin-right: 5.5%;
    }


    .menu_programmes .btn-outline-light{
        color: #2ea3f2;
        width: 100%;
        border-color: #2ea3f2;
        letter-spacing: 1px;
        font-size: 20px;
        border: 2px solid;
        position: relative;
        padding: 0.3em 1em;
        font-weight: 500;
        line-height: 1.7em;
        transition: all 0.2s;
    }
    .menu_programmes .btn-outline-light:hover{
        color:#2ea3f2;
        text-transform: none;
        background-color: #19065e;
        border-color: #19065e;
        transition: all 0.2s;
        content: "\35";

    }

    .btn_register{
        padding-top: 60px;
        width: 100%;
        text-align: center;
    }

    .btn_register .btn-outline-light{
        text-align: center;
        width: 182px;
        height: 48px;
        color: #ffffff;
        background: #ea1f00;
        border-color: #ea1f00;
        border-radius: 1px;
        letter-spacing: 1px;
        font-size: 18px;
        text-transform: uppercase;
    }

    .sectionprogrammespage{
            color: #666666;
            font-size: 14px;
            font-weight: 500;
            padding: 2% 0;
            
        }
        .rowprogrammespage{
            padding: 0% 0;
            margin: auto;
            position: relative;
            width: 80%;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            line-height: 1.9em;
        }
        .rowprogrammespage1, .rowprogrammespage2{
            display: inline-table;
        }
        .rowprogrammespage1{
            width: 74.25%;
            margin-right: 3%;
            height: 100%;
        }
        .rowprogrammespage2{
            width: 21.75%;
            height: 100%
        }
        .textprogrammespage1{
            margin-bottom: 2.02%;
        }
        .textprogrammespage1 hr{
            border-width: 1px;
            border-style: inset;
            overflow: hidden;
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
        }
        .btn-programmespage{
            color: #ffffff;
            background: #e09900;
            border-color: #ffffff;
            letter-spacing: 0px;
            font-size: 24px;
            display: inline-block;
            position: relative;
            padding: 0.3em 1.0em;
        }
        .btn-programmespage:hover{
            color:#ffffff;
            text-decoration:none;
        }
        .sidebar-programmespage{
            padding-left: 30px;
            border-left: 1px solid rgba(0, 0, 0, 0.1);
        }
        .menu-sidebar-programmespage{
            margin-bottom: 13.186%;
        }
        .menu-sidebar-programmespage .menu-container ul{
            padding: 0%;
        }
        .menu-sidebar-programmespage .menu-container ul li{
            margin-bottom: 0.5em;
            list-style: none;
            
        }
        .menu-sidebar-programmespage .menu-container ul li a{
            color: #666666;
        }
        .menu-sidebar-programmespage .menu-container ul li a:hover{
            color: #f96c00;
            text-decoration: none;
        }

        .card-aside{
            display: flex;
        }

        .card-img{
            align-self: flex-start;
            size: 30%;
        }

        .card-body{
            align-self: flex-end;
            justify-content: space-between;
            size: 70%;
        }
</style>
</head>

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}"/>
@stop

@section('content')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" 
    data-ride="carousel" data-interval="5000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="{{asset('images/s2.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="{{asset('images/s3.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="{{asset('images/s4.png')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="{{asset('images/s5.png')}}" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="{{asset('images/s6.png')}}" alt="fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="jumbotron" style="background: center; text-align: center;">
<p style="text-align: left;">I am delighted that you have chosen to consider Sinergia as an education destination.&nbsp;This site will provide you with the information about Sinergia Worldwide Education programmes and services more flexible.&nbsp;Our education programmes and services aim to instill discipline, professional conduct, and an ethical attitude in the education environments.&nbsp;This balanced approach to study develops the student as a whole, both personally and professionally preparing them for life.&nbsp;I wish you luck with that choice in the full knowledge that you will not regret your decision to join in Sinergia Worldwide Education.</p>
  <hr style="background-color: gray">
  <p style="text-align: right;"><em><strong>Principal of Sinergia</strong></em></p>
</div>

<div class="container" style="text-align: center; padding:54px 0;">
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-02.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-03.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-04.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-05.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-06.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-07.jpg') }}" alt="poster sinergia regsitration">
    </a>
</div>
<div id="programmes" style="margin-bottom: 25px;">
    <div class="row_programmes row_programmes_1">
        PROGRAMMES
    </div>
    <div class="row_programmes row_programmes_2">
        <div class="menu_programmes menu_programmes_1">
            <a  class="btn btn-outline-light" href="{{url('pre-school')}}">Preschool</a>
        </div>
        <div class="menu_programmes menu_programmes_2">
            <a  class="btn btn-outline-light" href="{{url('kindergarten')}}">Kindergarten</a>
        </div>
        <div class="menu_programmes menu_programmes_3">
            <a  class="btn btn-outline-light" href="{{url('primary')}}">Primary</a>
        </div>
    </div>
    <div class="row_programmes row_programmes_3">
        <div class="menu_programmes menu_programmes_4">
            <a  class="btn btn-outline-light" href="{{url('secondary-1')}}">Secondary 1</a>
        </div>
        <div class="menu_programmes menu_programmes_5">
            <a  class="btn btn-outline-light" href="{{url('igcse')}}">O Level / IGCSE</a>

        </div>
        <div class="menu_programmes menu_programmes_6">
            <a  class="btn btn-outline-light" href="{{url('a-as-level')}}">A / AS Level</a>
        </div>
    </div>
    <div class="row_programmes row_programmes_4">
        <div class="btn_register">
            <a href="https://bit.ly/sinergia_registration" type="button" class="btn btn-outline-light" style="padding-top: 10px;">
                REGISTER NOW
            </a>
        </div>
    </div>
</div>

<a style="margin: 10; width: auto; background-color: #ea9400; border-color: #ea9400;" href="{{url('registration-form')}}" type="button" class="btn btn-primary btn-lg btn-block">Registration Form</a>


<div class="sectionprogrammespage" style="display: none;">
    <div class="rowprogrammespage">
        <div class="rowprogrammespage1">
            <div class="textprogrammespage1">
                <p>
                    <strong>Sinergia Homeschooling Pre-School</strong>
                    specially adjust to assist students between the age of 4 to 5 years old. The purpose of this perograms is developing individual aptitudes, interests, and challenges of your children with learning at home.
                </p>
                <p>
                    Families usually choose independent school cause of some reason, such as dissatisfaction of the formal education which is available.
                </p>
                <hr>
                <div>
                    <strong>Methods</strong>
                </div>
                <div>
                    <hr>
                </div>
                <ol>
                    <li>Tutorial at home for homeschooling students</li>
                    <li>The tutor visits regularly 3 times a week</li>
                    <li>Students, parents, tutors, and academic counselors brainstorm and discuss about the schedules, make a deal about the schedules, subjects, tests, projects, and final examinations.</li>
                    <li>Available tests: Quiz, Midtest, Final test</li>
                </ol>
                <hr>
                <div>
                    <strong>Subjects</strong>
                </div>
                <div><hr></div>
                <ul>
                    <li>Writing</li>
                    <li>Reading</li>
                    <li>Mathematics</li>
                </ul>
            </div>
            <div class="btn-section-programmespage">
                <a class="btn-programmespage" href="https://bit.ly/sinergia_registration">REGISTER NOW</a>
            </div>
        </div>
        <div class="rowprogrammespage2">
            <div class="sidebar-programmespage">
                <div class="card-aside">
                    <img class="card-img" src="{{ asset('images/wearehiring_teacher.png') }}" 
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">WE ARE HIRING TEACHER</h5>
                        <p class="card-text">Jul 15, 2020</p>
                    </div>
                </div>
                <div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.carousel').carousel({
        interval: 5000,
        pause: 'false'
    })
</script>
@endsection

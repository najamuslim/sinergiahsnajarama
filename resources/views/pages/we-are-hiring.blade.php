@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>We Are Hiring Teacher - Sinergia Homeschooling</title>
    <style>
        <style>
        .headprogrammespage{
            width: 100%;
            color: white;
            background-color: #ea9400;
            padding: 2% 0;
            line-height: 0.25em;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 30px;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            margin-top: 95px;
        }
        .sectionprogrammespage{
            color: #666666;
            font-size: 14px;
            font-weight: 500;
            padding: 2% 0;
            margin-top: 140px;
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
    </style>
    </style>
</head>

@section('content')

<div class="sectionprogrammespage">
    <div class="rowprogrammespage">
    <h1>WE ARE HIRING TEACHER</h1>
        <div class="rowprogrammespage1">
            <div class="textprogrammespage1">
            <h3 style="font-family: Trebuchet MS; margin-top: 20px; margin-bottom: 30px;">Job Vacancies For History &amp; Geography Teachers</h3>
            <span style="font-family: Century Gothic; color: #ea9400;">#Responsibilities</span><br>
            <span style="font-family: Century Gothic;">• Prepare, set, and deliver lessons in line with Cambridge/ international curriculum.<br>
                • To teach across the whole age range primary – secondary &amp; A Level.<br>
                • Establish classroom/ private, offline/ online management utilizing positive supporting.<br>
                • Assess and monitoring the progress of learners and set goals for improvement.<br>
                • Manage clear and precise admin staff, management, and parents interaction.<br>
                • Take up practical/ project/ extracurricular activities.<br>
                • Be a part of a school event, training, meeting.<br>
                • Keep up COVID 19 SOP/ protap, promoting the health and safety of assigned classes.<br>
                • Present smooth communication and there are no obstacles to the internet and telecommunications networks in the online learning process.</span>
            <hr>
            <span style="font-family: Century Gothic; color: #ea9400;">#Requirement</span><br>
            <span style="font-family: Century Gothic;">
                • Be a passionate educator with the ability to deliver inquiry-based learning<br>
                • Male/Female max 40 years old<br>
                • Have teaching experiences International curriculum stream, one of (Cambridge/ IB/ AP/ SAT/ IPC) minimum 1-2 years experiences<br>
                • Bachelor Degree (S1)/ Master Degree (S2) according to subject, from reputable university/ institute (top 10 university or foreign university)<br>
                • Excellent written and spoken English (teaching in English)<br>
                • Up to date in teaching methods<br>
                • Proven ability to the successful academic program</span>
            <div class="btn-section-programmespage" style="margin-top: 20px;" >
                <img class="d-block w-100 h-150" src="{{asset('images/wearehiring_teacher.png')}}" alt="" width="519" height="519">
            </div>
            <div class="btn-section-programmespage" style="margin-top: 20px;">
                <a class="btn-programmespage" href="https://bit.ly/2JxbXYW">APPLY NOW</a>
            </div>
        </div>
    </div>
</div>

@endsection
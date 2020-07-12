@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Abaout Pre-School Programme - Sinergia Homeschooling</title>
    <style>
        .headpreschool{
            width: 100%;
            color: white;
            background-color: #ea9400;
            padding: 2% 0;
            line-height: 0.25em;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 30px;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            margin-top: 50px;
        }
        .sectionpreschool{
            color: #666666;
            font-size: 14px;
            font-weight: 500;
            padding: 2% 0;
            
        }
        .rowpreschool{
            padding: 0% 0;
            margin: auto;
            position: relative;
            width: 80%;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            line-height: 1.9em;
        }
        .rowpreschool1, .rowpreschool2{
            display: inline-table;
        }
        .rowpreschool1{
            width: 74.25%;
            margin-right: 3%;
            height: 100%;
        }
        .rowpreschool2{
            width: 21.75%;
            height: 100%
        }
        .textpreschool1{
            margin-bottom: 2.02%;
        }
        .textpreschool1 hr{
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
        .btn-preschool{
            color: #ffffff;
            background: #e09900;
            border-color: #ffffff;
            letter-spacing: 0px;
            font-size: 24px;
            display: inline-block;
            position: relative;
            padding: 0.3em 1.0em;
        }
        .btn-preschool:hover{
            color:#ffffff;
            text-decoration:none;
        }
        .sidebar-preschool{
            padding-left: 30px;
            border-left: 1px solid rgba(0, 0, 0, 0.1);
        }
        .menu-sidebar-preschool{
            margin-bottom: 13.186%;
        }
        .menu-sidebar-preschool .menu-container ul{
            padding: 0%;
        }
        .menu-sidebar-preschool .menu-container ul li{
            margin-bottom: 0.5em;
            list-style: none;
            
        }
        .menu-sidebar-preschool .menu-container ul li a{
            color: #666666;
        }
        .menu-sidebar-preschool .menu-container ul li a:hover{
            color: #f96c00;
            text-decoration: none;
        }
    </style>
</head>
@section('content')


<div class="headpreschool">
    <p style="margin-top: 45px; margin-left: 25px;">Pre-School</p>
</div>
<div class="sectionpreschool">
    <div class="rowpreschool">
        <div class="rowpreschool1">
            <div class="textpreschool1">
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
            <div class="btn-section-preschool">
                <a class="btn-preschool" href="https://bit.ly/sinergia_registration">REGISTER NOW</a>
            </div>
        </div>
        <div class="rowpreschool2">
            <div class="sidebar-preschool">
                <div class="menu-sidebar-preschool">
                    <h4>Programmes</h4>
                    <div class="menu-container">
                        <ul class="menu">
                            <li><a href="{{url('pre-school')}}">Pre-School Level</a></li>
                            <li><a href="#">Kindergarten</a></li>
                            <li><a href="#">Primary</a></li>
                            <li><a href="#">Secondary 1</a></li>
                            <li><a href="#">A / AS Level</a></li>
                            <li><a href="#">O Level / IGCSE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
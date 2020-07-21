@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Home School Programme IGCSE Level - Sinergia Homeschooling</title>
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
            margin-top: 50px;
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
    </style>
</head>
@section('content')


<div class="headprogrammespage">
    <p style="margin-top: 45px; margin-left: 25px;">O Level / IGCSE</p>
</div>
<div class="sectionprogrammespage">
    <div class="rowprogrammespage">
        <div class="rowprogrammespage1">
            <div class="textprogrammespage1">
                <p>
                    Cambridge IGCSE is the world’s most popular international qualification for 14 to 16 year olds. It is recognised by leading universities and employers worldwide, and is an international passport to progression and success. Developed over 25 years ago, it is tried, tested and trusted by schools worldwide.
                </p>
                <p>
                    GCE O Levels are designed for 14-16 years old and aim to prepare students for academic progression (such as A and AS Level study) and equip them with the skills necessary for employment. GCE O Levels have been designed specially for an international market and are sensitive to the needs of different countries. The qualifications are designed for students whose first language may not be English and this acknowledged throughout the examination process. The curriculum also allows teaching to be placed in a localised context, making it relevant in varying regions.
                </p>
                <hr>
                <p>
                    <strong>Sinergia Homeschooling O Level/IGCSE</strong>
                    specially adjust to assist students between the age of 14 to 16 years old. The purpose of this perograms is developing individual aptitudes, interests, and challenges of your children with learning at home.
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
                <p>IGCSE</p>
                <ul>
                    <li>Mathematics</li>
                    <li>English as A Second Language</li>
                    <li>First Language English</li>
                    <li>English Literature</li>
                    <li>Biology</li>
                    <li>Physics</li>
                    <li>Chemistry</li>
                    <li>Environmental Management</li>
                    <li>Information and Communication Technology</li>
                    <li>Business Studies</li>
                    <li>Commerce</li>
                    <li>Economics</li>
                    <li>Accounting</li>
                </ul>
                <p>O Level</p>
                <ul>
                    <li>Mathematics</li>
                    <li>English Language</li>
                    <li>English Literature</li>
                    <li>Biology</li>
                    <li>Physics</li>
                    <li>Chemistry</li>
                    <li>Environmental Management</li>
                    <li>Business Studies</li>
                    <li>Commerce</li>
                    <li>Economics</li>
                    <li>Accounting</li>
                </ul>
            </div>
            <div class="btn-section-programmespage">
                <a class="btn-programmespage" href="https://bit.ly/sinergia_registration">REGISTER NOW</a>
            </div>
        </div>
        <div class="rowprogrammespage2">
            <div class="sidebar-programmespage">
                <div class="menu-sidebar-programmespage">
                    <h4>Programmes</h4>
                    <div class="menu-container">
                        <ul class="menu">
                            <li><a href="{{url('pre-school')}}">Pre-School Level</a></li>
                            <li><a href="{{url('kindergarten')}}">Kindergarten</a></li>
                            <li><a href="{{url('primary')}}">Primary</a></li>
                            <li><a href="{{url('secondary-1')}}">Secondary 1</a></li>
                            <li><a href="{{url('a-as-level')}}">A / AS Level</a></li>
                            <li><a href="{{url('igcse')}}">O Level / IGCSE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
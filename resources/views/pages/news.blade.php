@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Home School Info and News - Sinergia Homeschooling</title>
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
    <p style="margin-top: 45px; margin-left: 25px;">NEWS</p>
</div>

<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/wearehiring_teacher.png') }}" alt="Card image cap">
    <div class="card-body">
      <a href="{{url('we-are-hiring-teacher')}}">
        <h5 class="card-title" style="color: black;">WE ARE HIRING TEACHER</h5>
      </a>
      <p class="card-text" style="color: gray">Jul 15, 2020 | Career, News</p>
      <p class="card-text" style="color: gray">Job Vacancies For History & Geography Teachers #Responsibilities : • Prepare, set and deliver lessons in line with Cambridge/ international curriculum. • To teach across the whole age range primary – secondary & A Level. • Establish classroom/ private,...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/covid.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BEWARE CORONAVIRUS!</h5>
      <p class="card-text" style="color: gray">Mar 11, 2020 | News</p>
      <p class="card-text" style="color: gray">KEEP HEALTHY, EVERYONE! In early 2020, the world was shocked by the spread of a new virus, Corona virus. It is known, the origins of this virus come from Wuhan, China. Found at the end of December at 2019. The virus which has the official name of the...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/Olevel.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">O Level</h5>
      <p class="card-text" style="color: gray">Aug 21, 2016 | Articles, News, Uncategorized</p>
      <p class="card-text" style="color: gray">About GCE O Levels GCE O Levels are designed for 14-16 years old and aim to prepare students for academic progression (such as A and AS Level study) and equip them with the skills necessary for employment. The GCE O Level curriculum places emphasis on board and...</p>
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="{{ asset('images/openRegBatch2.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">OPEN REGISTRATION BATCH II</h5>
      <p class="card-text" style="color: gray">Jul 7, 2020 | News</p>
      <p class="card-text" style="color: gray">Open Registration Batch II For All Programmes   #Sinergia21years Open Registration Batch II 6-31 July 2020 Are you looking for tuition or learning support? Now, we are open registration for new students and transfer. Sinergia Worldwide Education have experienced...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/igcse.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">IGCSE</h5>
      <p class="card-text" style="color: gray">Aug 30, 2016 | Articles, News, Uncategorized</p>
      <p class="card-text" style="color: gray">About IGCSE Level Cambridge IGCSE level is the world’s most popular international qualification for 14 to 16 year olds. Leading universities and employers worldwide recognize it, and is an international passport to progression and success. Developed over 25 years ago,...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/Alevel.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">A Level</h5>
      <p class="card-text" style="color: gray">Aug 30, 2016 | Articles, News, Uncategorized</p>
      <p class="card-text" style="color: gray">Cambridge International A Levels are internationally benchmarked qualifiations providing excellents preparation for university education. They are part of the Cambridge Advanced stage. They are taken in over 125 countries and offer a choice of 60 different subjects....
</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/onlineProgramSinergiaHS.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Online Program For Sinergia Homeschooling</h5>
      <p class="card-text" style="color: gray">Jun 15, 2020 | News</p>
      <p class="card-text" style="color: gray">Are you looking for homeschooling or tuition?                  We can provide your needs to get your goal. Sinergia Worldwide Education have experienced more than 21 years support our students to get the best education for their future. #WhyUs? 1. Arrange schedule,...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/cambridge.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cambridge Primary Checkpoint (CPC)</h5>
      <p class="card-text" style="color: gray">Aug 21, 2016 | Articles, News, Uncategorized</p>
      <p class="card-text" style="color: gray">About CPC CPC (Cambridge Primary Checkpoint) is designed to help students learn by providing comprehensive feedback on their strengths and weaknesses in the key curriculum areas. The tests are exclusively available to schools.It offers Cambridge Primary and are...</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/ASlevel.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">AS Level</h5>
      <p class="card-text" style="color: gray">Aug 21, 2016 | Articles, News, Uncategorized</p>
      <p class="card-text" style="color: gray">Thousands of learners worldwide gain places at leading universities every year with Cambridge International AS & A Levels. The syllabuses develop a deep understanding of subjects and independent thinking skills.We help schools to build a Cambridge Advanced...</p>
    </div>
  </div>
</div>




@endsection